<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\Club;
use App\Models\ClubMange;
use App\Models\Matche;
use App\Models\Post;
use App\Models\Sponsor;
use App\Models\Team;
use App\Models\TeamMange;
use Illuminate\View\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * List All Resources
     *
     * @return View
     */
    public function index(): View
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

     // $youtubeVideos = Youtube::listChannelVideos(env('YOUTUBE_CHANNEL_ID'), 10,true);
        $news = Post::orderBy('created_at', 'desc')->where('status', 1)->limit(3)->get();
        $matches = Matche::latest()->get();
        $managment = ClubMange::whereStatus(1)->with('clubMangeMembers')->first();
        $club = Club::first();
        $sponsors = Sponsor::all();
        return view('index', [
            'news' => $news,
            'managment' => $managment,
            'club' => $club,
            'sponsors' => $sponsors,
            'matches' => $matches,
           // 'youtubeVideos' => $youtubeVideos,
        ]);
    }
  /**
     * List All Resources
     *
     * @return View
     */
    public function index1(): View
    {
//        $videoList = Youtube::listChannelVideos('UCk1SpWNzOs4MYmr0uICEntg', 40);
//        dd($videoList);
        $news = Post::orderBy('created_at', 'desc')->where('status', 1)->limit(3)->get();
        $managment = ClubMange::whereStatus(1)->with('clubMangeMembers')->first();
        $sponsors = Sponsor::all();
        $club = Club::first();

        return view('index1', [
            'news' => $news,
            'managment' => $managment,
            'club' => $club,
            'sponsors' => $sponsors,
        ]);
    }
    public function aboutUs()
    {
        $club = Club::first();
        return view('pages.about_us', [
            'club' => $club,
        ]);
    }
    public function contactUs()
    {
        $club = Club::first();
        return view('pages.contact_us', [
            'club' => $club,
        ]);
    }
    public function clubManagement()
    {
        $management = ClubMange::whereStatus(1)->with('clubMangeMembers')->first();
        return view('pages.club_management', [
            'management' => $management,
        ]);
    }

    public function listPosts(): View
    {
        $news = Post::orderBy('created_at', 'desc')->where('status', 1)->paginate(12);

        return view('posts', [
            'news' => $news,
        ]);
    }

    public function showPost(Post $post): View
    {
        return view('post', ['post' => $post]);
    }

    public function teamIndex(): View
    {
        $teams = Team::paginate(12);

        return view('teams', ['teams' => $teams]);
    }

    public function teamShow(Team $team): View
    {
        $managment = TeamMange::where('team_id', $team->id)
            ->whereStatus(1)
            ->with('teamMangeMembers')
            ->first();
        $team->load('teamHeaderImage');

        return view('team', ['team' => $team, 'managment' => $managment]);
    }

//    public function displayImage($filename)
//
//    {
//        $path = storage_path('public/clubs/'.$filename);
//        if (!File::exists($path)) {
//
//            abort(404);
//
//        }
//        $file = File::get($path);
//        $type = File::mimeType($path);
//        $response = Response::make($file, 200);
//        $response->header("Content-Type", $type);
//
//        return $response;
//
//    }
}
