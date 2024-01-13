<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => true,
    1 => 
    array (
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AXUTE5lPQOUw0v9V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QTZuWqMkvCkADGwe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vnIrUmQFugUXOgxi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gXzA42pmLXUM8p4t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SOkPmnYCvR6Ynchw',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lhcZsZeKcIlUkPjb',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bvT5LnfUKpN7kZni',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/activation/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P4vqijZ0v9TrzSTR',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SSUWsL9BmdGL56Q8',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gaNmNUrcHlMeSMcQ',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::teJETQpLlRf4tJHP',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/password/forget' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TMbNv1AWg5JQPOnC',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/our-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rkDPoYtZ77Mrdaga',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/our-philosophy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eVC8A230hZVFbHoO',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/our-vision' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bsN2eBJ7BLiKt1So',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x3He6Guqr6eE88ic',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/teams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kwJy5qxZgFcs2Mwu',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/functional-roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OhGiAZkMgziLC0uh',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/technical-roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2FqLka776EsBhW34',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NWj5jCHOgP9B6JEq',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/own' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t0StResuHOwDVQ5D',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fFhH326wrh6uu3Su',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/other' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6TLmLXpxg2pIBqc2',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/transfer-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6d926XhOvanzOCbc',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/transfer-requests/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i4oGSfxVcCvThFKc',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/loan-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ev8i9YNcLda1A9ps',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/loan-requests/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0F9vN7XC3UuePiM5',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gBafK1DlSisFTnjI',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zdNM7OiATqbDRTC3',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kJgTjjROcNEFLtqv',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team/messages/reply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OhAmVMjGY9wM5sC2',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/club/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uO2jJHprlRIAiLrg',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uip6wbgmmOWFLtSX',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cpzaPpCnz1p2cLwl',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/club/messages/reply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s5iVhkqXo91RrcNF',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ENn7vAupme3Dy9vy',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VuCvHfzFZ3rpKv5n',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player/registration-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ew9G90n25Gega8lM',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player/associate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V2YiGLh1ECwaTaLc',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player/out-loan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6G6kfbN5SiJOB8YQ',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player/out-loan/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XyZtcWLMQ5uy5FIt',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4WOYo4vWpgmZjbpN',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/player/out-loan-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IOkyVWzkSxKpOnmq',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/technical-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZG5n4xo9KS4GsXqI',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/technical-team/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::toXQnfyFlpP5y0aw',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/technical-team/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KRnVGaYbQm2foXES',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team-management' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uOYyHwNdBcmsXxXS',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team-management/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MA8kHhLoKDFjmwQ4',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team-management/member/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HVYzhQAM6AGHJMUt',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team-management/member/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aVJQiEA00FT79O1s',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/team-management/member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j4dx0AHW1TJp5sQT',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S3fQoBpjwHk8Hghw',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1E2pawYdD4svzYYA',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.show',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.edit',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.update',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/change-logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.change-logo',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/edit-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.edit-password',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/save-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.save-password',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/upload-header-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.upload-header-image',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/info/save-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.save-token',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/players/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.pdf',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/players/request-index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.request-index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/players' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'players.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/players/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.payments.cancel',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notefications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.notefications.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.notefications.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notefications.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notefications.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            '_route' => 'notefications.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        5 => 
        array (
          0 => 
          array (
            '_route' => 'notefications.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notefications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.notefications.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notefications.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/message-notefications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message-notefications.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message-notefications.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.message-notefications.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.message-notefications.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            '_route' => 'message-notefications.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        5 => 
        array (
          0 => 
          array (
            '_route' => 'message-notefications.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/message-notefications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message-notefications.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.message-notefications.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-messages.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-messages.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team-messages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-messages.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/club-team-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.club-team-messages.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.club-team-messages.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        5 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/club-team-messages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.club-team-messages.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loan-players' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer-players' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/year-updates/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.year-updates.show',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.show',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team-manges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-manges.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-manges.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team-manges/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-manges.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/competitions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        5 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/competitions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/assistants' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.assistants.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.assistants.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/assistants/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.assistants.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/out-loan-players' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.index',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.store',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.out-loan-players.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'out-loan-players.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/out-loan-players/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.create',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.login',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.password.request',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.password.email',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.password.update',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.password.confirm',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.generated::tN1pmdACcTD4tcfZ',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.logout',
          ),
          1 => 'teams.qu.demo',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'teams.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'teams.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teams/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/players-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players-search.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'players-search.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clubs/change-logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.clubs.change-logo',
          ),
          1 => 'localhost',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/players/request/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.request-index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'players.request-index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/club-team-messages/group-message-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.group-message-create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/club-messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-messages.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-messages.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'club-messages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'club-messages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/club-messages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-messages.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/club-manges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-manges.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-manges.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'club-manges.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'club-manges.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/club-manges/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-manges.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mettings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/save-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.save-token',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/change-avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.change-avatar',
          ),
          1 => 'localhost',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.profile',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.',
          ),
          1 => 'localhost',
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loan-players/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer-players/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/year-updates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/year-updates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/matches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.matches.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.matches.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'matches.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'matches.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/matches/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.matches.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sponsors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sponsors.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sponsors.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sponsors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sponsors.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/feedbacks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.feedbacks.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/competitions/archive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.archive.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laratrust/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.permissions.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laratrust/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles.store',
          ),
          1 => 'localhost',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laratrust/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles.create',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laratrust/roles-assignment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles-assignment.index',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|(?:(?:[^./]*+\\.)++)(?|/oauth/(?|tokens/([^/]++)(*:54)|clients/([^/]++)(?|(*:80))|personal\\-access\\-tokens/([^/]++)(*:121))|/livewire/message/([^/]++)(*:156)|/([^/]++)/livewire/message/([^/]++)(*:199)|/livewire/preview\\-file/([^/]++)(*:239))|(?i:teams\\.qu\\.demo)\\.(?|/a(?|pi/v1/(?|password/reset/([^/]++)/([^/]++)(*:319)|te(?|chnical\\-team/([^/]++)(*:354)|am\\-management/member/([^/]++)(*:392)))|ssistants/([^/]++)(?|(*:423)|/edit(*:436)|(*:444)))|/info/delete\\-header\\-image/([^/]++)(*:490)|/p(?|layers/(?|send\\-to\\-club/([^/]++)(*:536)|checkout\\-register/([^/]++)(*:571)|([^/]++)(?|(*:590)|/edit(*:603)|(*:611)))|ayments/success/([^/]++)/([^/]++)/([^/]++)(*:663))|/notefications/([^/]++)(?|(*:698)|/edit(*:711)|(*:719))|/message\\-notefications/([^/]++)(?|(*:763)|/edit(*:776)|(*:784))|/t(?|eam\\-m(?|essages/([^/]++)(?|(*:826)|/edit(*:839)|(*:847))|ange(?|s/([^/]++)(?|(*:876)|/edit(*:889)|(*:897))|\\-members/([^/]++)(?|/(?|create(*:937)|store(*:950)|edit(*:962))|(*:971))))|ransfer\\-players/(?|c(?|reate/([^/]++)(*:1020)|heckout\\-loan/([^/]++)(*:1051))|store/([^/]++)(*:1075)|basic\\-(?|approve/([^/]++)(*:1110)|cancel/([^/]++)(*:1134))|([^/]++)(?|(*:1155)|/edit(*:1169)|(*:1178))))|/c(?|lub\\-team\\-messages/([^/]++)(?|(*:1226)|/edit(*:1240)|(*:1249))|ompetition(?|s/(?|s(?|ubscripe/([^/]++)(*:1298)|etup/([^/]++)(*:1320))|un\\-subscripe/([^/]++)(*:1352)|([^/]++)(?|(*:1372)|/edit(*:1386)|(*:1395)))|/([^/]++)/competition\\-(?|issues(?|(*:1441)|/(?|messages(?|(*:1465)|/create(*:1481))|create(*:1497)|([^/]++)(*:1514)))|matches(?|(*:1535)|/(?|show/([^/]++)(*:1561)|pdf/([^/]++)(*:1582))))|\\-(?|match/([^/]++)/(?|players/(?|create(*:1634)|([^/]++)(*:1651))|assistants/(?|create(*:1681)|([^/]++)(*:1698)))|teams/([^/]++)/(?|([^/]++)/delete\\-(?|member(*:1753)|player(*:1768)|loan\\-(?|in\\-player(*:1796)|out\\-player(*:1816)))|register(*:1835)|checkout(*:1852)|pdf(*:1864)))))|/loan\\-players/(?|c(?|reate/([^/]++)(*:1913)|heckout\\-loan/([^/]++)(*:1944))|store/([^/]++)(*:1968)|basic\\-(?|approve/([^/]++)(*:2003)|cancel/([^/]++)(*:2027))|([^/]++)(?|(*:2048)|/edit(*:2062)|(*:2071)))|/year\\-updates/c(?|ancel\\-player/([^/]++)(*:2123)|heckout\\-year\\-update/([^/]++)(*:2162))|/out\\-loan\\-players/(?|send\\-to\\-club/([^/]++)(*:2218)|checkout/([^/]++)(*:2244)|([^/]++)(?|(*:2264)|/edit(*:2278)|(*:2287)))|/reset\\-password/([^/]++)(*:2323))|(?i:localhost)\\.(?|/t(?|eams/([^/]++)(?|/(?|change\\-logo(*:2389)|edit(?|\\-password(*:2415)|(*:2424))|save\\-password(*:2448)|assistant/([^/]++)(*:2475))|(*:2485))|ransfer\\-players/(?|change\\-state/([^/]++)(*:2537)|([^/]++)(?|(*:2557)|/edit(*:2571)|(*:2580))))|/p(?|layers(?|\\-search/([^/]++)/show(*:2628)|/(?|([^/]++)(?|/(?|edit(*:2660)|pdf(*:2672))|(*:2682)|(*:2691))|show/([^/]++)(*:2714)|first\\-approve/([^/]++)/([^/]++)(*:2755)|a(?|ffiliat(?|e/([^/]++)(*:2788)|ion/([^/]++)(*:2809))|rrest/([^/]++)(*:2833))))|osts/(?|change\\-status/([^/]++)/([^/]++)(*:2885)|([^/]++)(?|(*:2905)|/edit(*:2919)|(*:2928))))|/c(?|lub(?|s/([^/]++)(?|(*:2964)|/edit(*:2978)|(*:2987))|\\-(?|team\\-messages/([^/]++)(?|(*:3028)|/edit(*:3042)|(*:3051))|m(?|essages/([^/]++)(?|(*:3084)|/edit(*:3098)|(*:3107))|ange(?|s/([^/]++)(?|(*:3137)|/edit(*:3151)|(*:3160))|\\-members/([^/]++)(?|/(?|create(*:3201)|store(*:3215)|edit(*:3228))|(*:3238))))))|ompetition(?|s/(?|([^/]++)/(?|a(?|rchive(*:3292)|ctive(*:3306))|un\\-active(*:3326)|s(?|end\\-to\\-mange(*:3353)|how\\-team/([^/]++)(*:3380))|display(*:3397))|pdf/([^/]++)(*:3419)|([^/]++)(?|(*:3439)|/edit(*:3453)|(*:3462)))|/([^/]++)/competition\\-(?|issues(?|(*:3508)|/(?|message(?|(*:3531)|/create(*:3547))|create(*:3563)|([^/]++)(?|(*:3583)|/close(*:3598))))|matches(?|(*:3620)|/(?|create(*:3639)|show/([^/]++)(*:3661)|edit/([^/]++)(*:3683)|destroy/([^/]++)(*:3708)|refree\\-report/([^/]++)(?|(*:3743)|/pdf(*:3756))|admin\\-report/([^/]++)(?|(*:3791)|/pdf(*:3804))|pdf/([^/]++)(*:3826))))|\\-match/([^/]++)/(?|players/(?|edit/([^/]++)(*:3882)|update/([^/]++)(*:3906)|add\\-goal/([^/]++)(*:3933)|delete\\-goal/([^/]++)/([^/]++)(*:3972))|assistants/(?|edit/([^/]++)(*:4009)|update/([^/]++)(*:4033)))))|/notefications/([^/]++)(?|(*:4072)|/edit(*:4086)|(*:4095))|/m(?|e(?|ssage\\-notefications/([^/]++)(?|(*:4146)|/edit(*:4160)|(*:4169))|ttings/([^/]++)(?|/(?|update\\-status/([^/]++)(*:4224)|print(*:4238)|edit(*:4251))|(*:4261)))|atches/([^/]++)(?|(*:4290)|/edit(*:4304)|(*:4313)))|/users/([^/]++)(?|/(?|edit(*:4350)|update(*:4365))|(*:4375))|/l(?|oan\\-players/(?|change\\-state/([^/]++)(*:4428)|([^/]++)(?|(*:4448)|/edit(*:4462)|(*:4471)))|aratrust/(?|permissions/([^/]++)(?|/edit(*:4522)|(*:4531))|roles(?|/([^/]++)(?|(*:4561)|/edit(*:4575)|(*:4584))|\\-assignment/([^/]++)(?|/edit(*:4623)|(*:4632)))))|/year\\-updates/(?|teams/([^/]++)(*:4677)|([^/]++)(?|/edit(*:4702)|(*:4711)))|/sponsors/([^/]++)(?|(*:4743)|/edit(*:4757)|(*:4766))|/feedbacks/([^/]++)(?|(*:4798))|/out\\-loan\\-players/([^/]++)(?|(*:4839)|/(?|approve(*:4859)|cancel(*:4874))))|(?:(?:[^./]*+\\.)++)(?|/t(?|eams/(?|([^/]++)/(?|change\\-logo(*:4945)|edit\\-password(*:4968)|save\\-password(*:4991)|assistant/([^/]++)(*:5018))|create(*:5034)|([^/]++)(?|(*:5054)|/edit(*:5068)|(*:5077)))|ransfer\\-players/(?|c(?|hange\\-state/([^/]++)(*:5133)|reate(*:5147))|([^/]++)(?|(*:5168)|/edit(*:5182)|(*:5191))))|/p(?|layers(?|\\-search/([^/]++)/show(*:5239)|/(?|create(*:5258)|([^/]++)(?|/(?|edit(*:5286)|pdf(*:5298))|(*:5308)|(*:5317))|show/([^/]++)(*:5340)|first\\-approve/([^/]++)/([^/]++)(*:5381)|a(?|ffiliat(?|e/([^/]++)(*:5414)|ion/([^/]++)(*:5435))|rrest/([^/]++)(*:5459))))|osts/(?|c(?|hange\\-status/([^/]++)/([^/]++)(*:5514)|reate(*:5528))|([^/]++)(?|(*:5549)|/edit(*:5563)|(*:5572))))|/c(?|lub(?|s/(?|change\\-logo(*:5612)|([^/]++)(?|(*:5632)|/edit(*:5646)|(*:5655)))|\\-(?|team\\-messages/(?|group\\-message\\-create(*:5711)|create(*:5726)|([^/]++)(?|(*:5746)|/edit(*:5760)|(*:5769)))|m(?|essages/(?|create(*:5801)|([^/]++)(?|(*:5821)|/edit(*:5835)|(*:5844)))|ange(?|s/(?|create(*:5873)|([^/]++)(?|(*:5893)|/edit(*:5907)|(*:5916)))|\\-members/([^/]++)(?|/(?|create(*:5958)|store(*:5972)|edit(*:5985))|(*:5995))))))|ompetition(?|s/(?|archive(*:6034)|([^/]++)/(?|a(?|rchive(*:6065)|ctive(*:6079))|un\\-active(*:6099)|s(?|end\\-to\\-mange(*:6126)|how\\-team/([^/]++)(*:6153))|display(*:6170))|pdf/([^/]++)(*:6192)|create(*:6207)|([^/]++)(?|(*:6227)|/edit(*:6241)|(*:6250)))|/([^/]++)/competition\\-(?|issues(?|(*:6296)|/(?|message(?|(*:6319)|/create(*:6335))|create(*:6351)|([^/]++)(?|(*:6371)|/close(*:6386))))|matches(?|(*:6408)|/(?|create(*:6427)|show/([^/]++)(*:6449)|edit/([^/]++)(*:6471)|destroy/([^/]++)(*:6496)|refree\\-report/([^/]++)(?|(*:6531)|/pdf(*:6544))|admin\\-report/([^/]++)(?|(*:6579)|/pdf(*:6592))|pdf/([^/]++)(*:6614))))|\\-match/([^/]++)/(?|players/(?|edit/([^/]++)(*:6670)|update/([^/]++)(*:6694)|add\\-goal/([^/]++)(*:6721)|delete\\-goal/([^/]++)/([^/]++)(*:6760))|assistants/(?|edit/([^/]++)(*:6797)|update/([^/]++)(*:6821)))))|/notefications/(?|create(*:6858)|([^/]++)(?|(*:6878)|/edit(*:6892)|(*:6901)))|/m(?|e(?|ssage\\-notefications/(?|create(*:6951)|([^/]++)(?|(*:6971)|/edit(*:6985)|(*:6994)))|ttings/(?|([^/]++)/(?|update\\-status/([^/]++)(*:7050)|print(*:7064))|create(*:7080)|([^/]++)(?|(*:7100)|/edit(*:7114)|(*:7123))))|atches/(?|create(*:7151)|([^/]++)(?|(*:7171)|/edit(*:7185)|(*:7194))))|/users/(?|save\\-token(*:7227)|change\\-avatar(*:7250)|profile(?|(*:7269))|([^/]++)/(?|edit(*:7295)|update(*:7310))|create(*:7326)|([^/]++)(?|(*:7346)))|/loan\\-players/(?|c(?|hange\\-state/([^/]++)(*:7400)|reate(*:7414))|([^/]++)(?|(*:7435)|/edit(*:7449)|(*:7458)))|/year\\-updates/(?|show(*:7491)|teams/([^/]++)(*:7514)|create(*:7529)|([^/]++)(?|/edit(*:7554)|(*:7563)))|/sponsors/(?|create(*:7593)|([^/]++)(?|(*:7613)|/edit(*:7627)|(*:7636)))|/feedbacks/([^/]++)(?|(*:7669))|/out\\-loan\\-players/([^/]++)(?|(*:7710)|/(?|approve(*:7730)|cancel(*:7745)))))/?$}sDu',
    ),
    3 => 
    array (
      54 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GBTP6q8Cz2VzMc9l',
          ),
          1 => 
          array (
            0 => 'token',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VL6yvfGFJpd4BU3d',
          ),
          1 => 
          array (
            0 => 'assistant',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PV1cPvxle8M67z9H',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.assistants.show',
          ),
          1 => 
          array (
            0 => 'assistant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.assistants.edit',
          ),
          1 => 
          array (
            0 => 'assistant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.assistants.update',
          ),
          1 => 
          array (
            0 => 'assistant',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.assistants.destroy',
          ),
          1 => 
          array (
            0 => 'assistant',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.teams.delete-header-image',
          ),
          1 => 
          array (
            0 => 'image',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.send-to-club',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.checkout',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.show',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.edit',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.update',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.players.destroy',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.payments.success',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
            2 => 'transaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.notefications.show',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.notefications.edit',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.notefications.update',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.notefications.destroy',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message-notefications.show',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message-notefications.edit',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message-notefications.update',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message-notefications.destroy',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-messages.show',
          ),
          1 => 
          array (
            0 => 'team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-messages.edit',
          ),
          1 => 
          array (
            0 => 'team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-messages.update',
          ),
          1 => 
          array (
            0 => 'team_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-messages.destroy',
          ),
          1 => 
          array (
            0 => 'team_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-manges.show',
          ),
          1 => 
          array (
            0 => 'team_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-manges.edit',
          ),
          1 => 
          array (
            0 => 'team_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-manges.update',
          ),
          1 => 
          array (
            0 => 'team_mange',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-manges.destroy',
          ),
          1 => 
          array (
            0 => 'team_mange',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-mange-members.create',
          ),
          1 => 
          array (
            0 => 'teamMange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-mange-members.store',
          ),
          1 => 
          array (
            0 => 'teamMange',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-mange-members.edit',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-mange-members.update',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team-mange-members.destroy',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.create',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.checkout',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.store',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.basic-approve',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.basic-cancel',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.show',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.edit',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.update',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.transfer-players.destroy',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.club-team-messages.show',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.club-team-messages.edit',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.club-team-messages.update',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.club-team-messages.destroy',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.subscripe',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.setup',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.un-subscripe',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.show',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.edit',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.update',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competitions.destroy',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-issues.index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-issues.message-index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-issues.message-create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-issues.create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-issues.show',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'competitionIssue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-matches.index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-matches.show',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-matches.pdf',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.match-players.create',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.match-players.destroy',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.match-assistants.create',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.match-assistants.destroy',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'assistant',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-teams.delete-member',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
            1 => 'assistant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-teams.delete-player',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
            1 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-teams.delete-loan-in-player',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
            1 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-teams.delete-loan-out-player',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
            1 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-teams.register',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-teams.checkout',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.competition-teams.pdf',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.create',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.checkout',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.store',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.basic-approve',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.basic-cancel',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.show',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.edit',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.update',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loan-players.destroy',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.year-updates.cancel-player',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.year-updates.checkout',
          ),
          1 => 
          array (
            0 => 'yearUpdate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.send-to-club',
          ),
          1 => 
          array (
            0 => 'outLoanPlayer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.checkout',
          ),
          1 => 
          array (
            0 => 'loan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.show',
          ),
          1 => 
          array (
            0 => 'out_loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.edit',
          ),
          1 => 
          array (
            0 => 'out_loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.update',
          ),
          1 => 
          array (
            0 => 'out_loan_player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.out-loan-players.destroy',
          ),
          1 => 
          array (
            0 => 'out_loan_player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.change-logo',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.edit-password',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.edit',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.save-password',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.show-assistant',
          ),
          1 => 
          array (
            0 => 'team',
            1 => 'assistant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.show',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.update',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.teams.destroy',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.change-state',
          ),
          1 => 
          array (
            0 => 'transferPlayer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.show',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.edit',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.update',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.transfer-players.destroy',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players-search.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.edit',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.pdf',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.update',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.destroy',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.index',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.show',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.first-approve',
          ),
          1 => 
          array (
            0 => 'player',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.affiliate',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.affiliation',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.players.arrest',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.change-status',
          ),
          1 => 
          array (
            0 => 'post',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.show',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.clubs.show',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.clubs.edit',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.clubs.update',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.show',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.edit',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.update',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-team-messages.destroy',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-messages.show',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3098 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-messages.edit',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-messages.update',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-messages.destroy',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-manges.show',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-manges.edit',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-manges.update',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-manges.destroy',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-mange-members.create',
          ),
          1 => 
          array (
            0 => 'clubMange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-mange-members.store',
          ),
          1 => 
          array (
            0 => 'clubMange',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-mange-members.edit',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-mange-members.update',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.club-mange-members.destroy',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.archive.store',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.active',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.un-active',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.send-to-mange',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.show-team',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'competitionTeam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.display',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.pdf',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.show',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.edit',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.update',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competitions.destroy',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-issues.index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-issues.message-index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-issues.message-create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-issues.create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-issues.show',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'competitionIssue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-issues.close',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'competitionIssue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3620 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.show',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.edit',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.destroy',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.refree-report',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.refree-report.pdf',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.admin-report',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.admin-report.pdf',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.competition-matches.pdf',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3882 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.match-players.edit',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.match-players.update',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.match-players.add-goal',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.match-players.delete-goal',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
            2 => 'index',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.match-assistants.edit',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'assistant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.match-assistants.update',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'assistant',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notefications.show',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notefications.edit',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notefications.update',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notefications.destroy',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.message-notefications.show',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.message-notefications.edit',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.message-notefications.update',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.message-notefications.destroy',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.update-status',
          ),
          1 => 
          array (
            0 => 'metting',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.print',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.edit',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.show',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.update',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mettings.destroy',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.matches.show',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.matches.edit',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.matches.update',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.matches.destroy',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.change-state',
          ),
          1 => 
          array (
            0 => 'loanPlayer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.show',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.edit',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.update',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.loan-players.destroy',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.permissions.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.permissions.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles-assignment.edit',
          ),
          1 => 
          array (
            0 => 'roles_assignment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laratrust.roles-assignment.update',
          ),
          1 => 
          array (
            0 => 'roles_assignment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.team',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.edit',
          ),
          1 => 
          array (
            0 => 'year_update',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.update',
          ),
          1 => 
          array (
            0 => 'year_update',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.year-updates.destroy',
          ),
          1 => 
          array (
            0 => 'year_update',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sponsors.show',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sponsors.edit',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sponsors.update',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sponsors.destroy',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.feedbacks.show',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.feedbacks.destroy',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.out-loan-players.show',
          ),
          1 => 
          array (
            0 => 'outLoanPlayer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.out-loan-players.approve',
          ),
          1 => 
          array (
            0 => 'outLoanPlayer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.out-loan-players.cancel',
          ),
          1 => 
          array (
            0 => 'outLoanPlayer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.change-logo',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.edit-password',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.save-password',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.show-assistant',
          ),
          1 => 
          array (
            0 => 'team',
            1 => 'assistant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5054 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.show',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.edit',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5077 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.update',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teams.destroy',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.change-state',
          ),
          1 => 
          array (
            0 => 'transferPlayer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.show',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.edit',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.update',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-players.destroy',
          ),
          1 => 
          array (
            0 => 'transfer_player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players-search.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5258 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.edit',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.pdf',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.update',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'players.destroy',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.index',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.show',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.first-approve',
          ),
          1 => 
          array (
            0 => 'player',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.affiliate',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.affiliation',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'players.arrest',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.change-status',
          ),
          1 => 
          array (
            0 => 'post',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.show',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clubs.change-logo',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clubs.show',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clubs.edit',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clubs.update',
          ),
          1 => 
          array (
            0 => 'club',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.group-message-create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.show',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.edit',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.update',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'club-team-messages.destroy',
          ),
          1 => 
          array (
            0 => 'club_team_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-messages.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-messages.show',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-messages.edit',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-messages.update',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'club-messages.destroy',
          ),
          1 => 
          array (
            0 => 'club_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-manges.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-manges.show',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-manges.edit',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-manges.update',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'club-manges.destroy',
          ),
          1 => 
          array (
            0 => 'club_mange',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-mange-members.create',
          ),
          1 => 
          array (
            0 => 'clubMange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-mange-members.store',
          ),
          1 => 
          array (
            0 => 'clubMange',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-mange-members.edit',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club-mange-members.update',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'club-mange-members.destroy',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.archive.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.archive.store',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.active',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.un-active',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.send-to-mange',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.show-team',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'competitionTeam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.display',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.pdf',
          ),
          1 => 
          array (
            0 => 'competitionTeam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.show',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.edit',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.update',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'competitions.destroy',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-issues.index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-issues.message-index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-issues.message-create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-issues.create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-issues.show',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'competitionIssue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-issues.close',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'competitionIssue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.index',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6427 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.create',
          ),
          1 => 
          array (
            0 => 'competition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.show',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.edit',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.destroy',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.refree-report',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.refree-report.pdf',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.admin-report',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.admin-report.pdf',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competition-matches.pdf',
          ),
          1 => 
          array (
            0 => 'competition',
            1 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'match-players.edit',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'match-players.update',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'match-players.add-goal',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'match-players.delete-goal',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'player',
            2 => 'index',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'match-assistants.edit',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'assistant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'match-assistants.update',
          ),
          1 => 
          array (
            0 => 'match',
            1 => 'assistant',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notefications.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notefications.show',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notefications.edit',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notefications.update',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'notefications.destroy',
          ),
          1 => 
          array (
            0 => 'notefication',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message-notefications.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message-notefications.show',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      6985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message-notefications.edit',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      6994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message-notefications.update',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'message-notefications.destroy',
          ),
          1 => 
          array (
            0 => 'message_notefication',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.update-status',
          ),
          1 => 
          array (
            0 => 'metting',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.print',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.show',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.edit',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.update',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mettings.destroy',
          ),
          1 => 
          array (
            0 => 'metting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'matches.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'matches.show',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'matches.edit',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'matches.update',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'matches.destroy',
          ),
          1 => 
          array (
            0 => 'match',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.save-token',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.change-avatar',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.change-state',
          ),
          1 => 
          array (
            0 => 'loanPlayer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.show',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.edit',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.update',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'loan-players.destroy',
          ),
          1 => 
          array (
            0 => 'loan_player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.show',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.team',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.edit',
          ),
          1 => 
          array (
            0 => 'year_update',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.update',
          ),
          1 => 
          array (
            0 => 'year_update',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'year-updates.destroy',
          ),
          1 => 
          array (
            0 => 'year_update',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.show',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.edit',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.update',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.destroy',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.show',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.destroy',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'out-loan-players.show',
          ),
          1 => 
          array (
            0 => 'outLoanPlayer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      7730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'out-loan-players.approve',
          ),
          1 => 
          array (
            0 => 'outLoanPlayer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      7745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'out-loan-players.cancel',
          ),
          1 => 
          array (
            0 => 'outLoanPlayer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AXUTE5lPQOUw0v9V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::AXUTE5lPQOUw0v9V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QTZuWqMkvCkADGwe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::QTZuWqMkvCkADGwe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vnIrUmQFugUXOgxi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::vnIrUmQFugUXOgxi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gXzA42pmLXUM8p4t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007780000000000000000";}";s:4:"hash";s:44:"lGKvN6yDFcgQ6PUcf89GuDK9gvpuo18k7rwSHQfJM48=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gXzA42pmLXUM8p4t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SOkPmnYCvR6Ynchw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::SOkPmnYCvR6Ynchw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lhcZsZeKcIlUkPjb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::lhcZsZeKcIlUkPjb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bvT5LnfUKpN7kZni' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bvT5LnfUKpN7kZni',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P4vqijZ0v9TrzSTR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/activation/resend',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\RegisterController@resendActivation',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\RegisterController@resendActivation',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::P4vqijZ0v9TrzSTR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SSUWsL9BmdGL56Q8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/activate',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\RegisterController@activate',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\RegisterController@activate',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::SSUWsL9BmdGL56Q8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GBTP6q8Cz2VzMc9l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/password/reset/{token}/{hash}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/password',
        'where' => 
        array (
        ),
        'as' => 'generated::GBTP6q8Cz2VzMc9l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gaNmNUrcHlMeSMcQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/password/reset',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/password',
        'where' => 
        array (
        ),
        'as' => 'generated::gaNmNUrcHlMeSMcQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::teJETQpLlRf4tJHP' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\ResetPasswordController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\ResetPasswordController@updatePassword',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/password',
        'where' => 
        array (
        ),
        'as' => 'generated::teJETQpLlRf4tJHP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TMbNv1AWg5JQPOnC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/password/forget',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/password',
        'where' => 
        array (
        ),
        'as' => 'generated::TMbNv1AWg5JQPOnC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rkDPoYtZ77Mrdaga' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/our-message',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeneralController@ourMessage',
        'controller' => 'App\\Http\\Controllers\\API\\GeneralController@ourMessage',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::rkDPoYtZ77Mrdaga',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eVC8A230hZVFbHoO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/our-philosophy',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeneralController@ourPhilosophy',
        'controller' => 'App\\Http\\Controllers\\API\\GeneralController@ourPhilosophy',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::eVC8A230hZVFbHoO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bsN2eBJ7BLiKt1So' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/our-vision',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeneralController@ourVision',
        'controller' => 'App\\Http\\Controllers\\API\\GeneralController@ourVision',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bsN2eBJ7BLiKt1So',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x3He6Guqr6eE88ic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeneralController@users',
        'controller' => 'App\\Http\\Controllers\\API\\GeneralController@users',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::x3He6Guqr6eE88ic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kwJy5qxZgFcs2Mwu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/teams',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeneralController@teams',
        'controller' => 'App\\Http\\Controllers\\API\\GeneralController@teams',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kwJy5qxZgFcs2Mwu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OhGiAZkMgziLC0uh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/functional-roles',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeneralController@functionalRoles',
        'controller' => 'App\\Http\\Controllers\\API\\GeneralController@functionalRoles',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::OhGiAZkMgziLC0uh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2FqLka776EsBhW34' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/technical-roles',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeneralController@technicalRoles',
        'controller' => 'App\\Http\\Controllers\\API\\GeneralController@technicalRoles',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::2FqLka776EsBhW34',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWj5jCHOgP9B6JEq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@index',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::NWj5jCHOgP9B6JEq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t0StResuHOwDVQ5D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team/own',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@own',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@own',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::t0StResuHOwDVQ5D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fFhH326wrh6uu3Su' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/team/update',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@update',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@update',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::fFhH326wrh6uu3Su',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6TLmLXpxg2pIBqc2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team/other',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@other',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@other',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::6TLmLXpxg2pIBqc2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6d926XhOvanzOCbc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team/transfer-requests',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@transferRequests',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@transferRequests',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::6d926XhOvanzOCbc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i4oGSfxVcCvThFKc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team/transfer-requests/show',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@showTransferRequests',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@showTransferRequests',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::i4oGSfxVcCvThFKc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ev8i9YNcLda1A9ps' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team/loan-requests',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@loanRequests',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@loanRequests',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::ev8i9YNcLda1A9ps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0F9vN7XC3UuePiM5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team/loan-requests/show',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@showLoanRequests',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@showLoanRequests',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::0F9vN7XC3UuePiM5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gBafK1DlSisFTnjI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team/messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@messages',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@messages',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::gBafK1DlSisFTnjI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zdNM7OiATqbDRTC3' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/team/messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@updateMessages',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@updateMessages',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::zdNM7OiATqbDRTC3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kJgTjjROcNEFLtqv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/team/messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@storeMessages',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@storeMessages',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::kJgTjjROcNEFLtqv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OhAmVMjGY9wM5sC2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/team/messages/reply',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamController@replyMessage',
        'controller' => 'App\\Http\\Controllers\\API\\TeamController@replyMessage',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team',
        'where' => 
        array (
        ),
        'as' => 'generated::OhAmVMjGY9wM5sC2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uO2jJHprlRIAiLrg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/club/messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ClubController@messages',
        'controller' => 'App\\Http\\Controllers\\API\\ClubController@messages',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/club',
        'where' => 
        array (
        ),
        'as' => 'generated::uO2jJHprlRIAiLrg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uip6wbgmmOWFLtSX' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/club/messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ClubController@updateMessages',
        'controller' => 'App\\Http\\Controllers\\API\\ClubController@updateMessages',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/club',
        'where' => 
        array (
        ),
        'as' => 'generated::uip6wbgmmOWFLtSX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cpzaPpCnz1p2cLwl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/club/messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ClubController@storeMessages',
        'controller' => 'App\\Http\\Controllers\\API\\ClubController@storeMessages',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/club',
        'where' => 
        array (
        ),
        'as' => 'generated::cpzaPpCnz1p2cLwl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s5iVhkqXo91RrcNF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/club/messages/reply',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ClubController@replyMessage',
        'controller' => 'App\\Http\\Controllers\\API\\ClubController@replyMessage',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/club',
        'where' => 
        array (
        ),
        'as' => 'generated::s5iVhkqXo91RrcNF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ENn7vAupme3Dy9vy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/player',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@index',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::ENn7vAupme3Dy9vy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VuCvHfzFZ3rpKv5n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/player/show',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@show',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@show',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::VuCvHfzFZ3rpKv5n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ew9G90n25Gega8lM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/player/registration-requests',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@registrationRequests',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@registrationRequests',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::Ew9G90n25Gega8lM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V2YiGLh1ECwaTaLc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/player/associate',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@associate',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@associate',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::V2YiGLh1ECwaTaLc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6G6kfbN5SiJOB8YQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/player/out-loan',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@indexOutLoan',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@indexOutLoan',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::6G6kfbN5SiJOB8YQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XyZtcWLMQ5uy5FIt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/player/out-loan/show',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@showOutLoan',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@showOutLoan',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::XyZtcWLMQ5uy5FIt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4WOYo4vWpgmZjbpN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/player/store',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@store',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@store',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::4WOYo4vWpgmZjbpN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IOkyVWzkSxKpOnmq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/player/out-loan-store',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PlayerController@storeOutLoan',
        'controller' => 'App\\Http\\Controllers\\API\\PlayerController@storeOutLoan',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/player',
        'where' => 
        array (
        ),
        'as' => 'generated::IOkyVWzkSxKpOnmq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZG5n4xo9KS4GsXqI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/technical-team',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@index',
        'controller' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/technical-team',
        'where' => 
        array (
        ),
        'as' => 'generated::ZG5n4xo9KS4GsXqI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::toXQnfyFlpP5y0aw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/technical-team/store',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@store',
        'controller' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@store',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/technical-team',
        'where' => 
        array (
        ),
        'as' => 'generated::toXQnfyFlpP5y0aw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KRnVGaYbQm2foXES' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/technical-team/update',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@update',
        'controller' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@update',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/technical-team',
        'where' => 
        array (
        ),
        'as' => 'generated::KRnVGaYbQm2foXES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VL6yvfGFJpd4BU3d' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/technical-team/{assistant}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\TechnicalTeamController@destroy',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/technical-team',
        'where' => 
        array (
        ),
        'as' => 'generated::VL6yvfGFJpd4BU3d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uOYyHwNdBcmsXxXS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team-management',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamManagementController@index',
        'controller' => 'App\\Http\\Controllers\\API\\TeamManagementController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team-management',
        'where' => 
        array (
        ),
        'as' => 'generated::uOYyHwNdBcmsXxXS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MA8kHhLoKDFjmwQ4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/team-management/store',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamManagementController@store',
        'controller' => 'App\\Http\\Controllers\\API\\TeamManagementController@store',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team-management',
        'where' => 
        array (
        ),
        'as' => 'generated::MA8kHhLoKDFjmwQ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HVYzhQAM6AGHJMUt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/team-management/member/store',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@store',
        'controller' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@store',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team-management/member',
        'where' => 
        array (
        ),
        'as' => 'generated::HVYzhQAM6AGHJMUt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aVJQiEA00FT79O1s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/team-management/member/update',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@update',
        'controller' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@update',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team-management/member',
        'where' => 
        array (
        ),
        'as' => 'generated::aVJQiEA00FT79O1s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j4dx0AHW1TJp5sQT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/team-management/member',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@index',
        'controller' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team-management/member',
        'where' => 
        array (
        ),
        'as' => 'generated::j4dx0AHW1TJp5sQT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PV1cPvxle8M67z9H' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/team-management/member/{member}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\TeamManagementMemberController@destroy',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/team-management/member',
        'where' => 
        array (
        ),
        'as' => 'generated::PV1cPvxle8M67z9H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S3fQoBpjwHk8Hghw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/notifications',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::S3fQoBpjwHk8Hghw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1E2pawYdD4svzYYA' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/notifications',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api-team',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@update',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@update',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api/v1/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::1E2pawYdD4svzYYA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'as' => 'dashboard.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.change-logo' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'teams/{team}/change-logo',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@changeLogo',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@changeLogo',
        'as' => 'dashboard.teams.change-logo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.edit-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}/edit-password',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@editPassword',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@editPassword',
        'as' => 'dashboard.teams.edit-password',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.save-password' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'teams/{team}/save-password',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@savePassword',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@savePassword',
        'as' => 'dashboard.teams.save-password',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.show-assistant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}/assistant/{assistant}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@showAssistant',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@showAssistant',
        'as' => 'dashboard.teams.show-assistant',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.teams.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.teams.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'teams',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.teams.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.teams.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.teams.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.teams.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.teams.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.teams.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players-search.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players-search',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerSearchController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerSearchController@index',
        'as' => 'dashboard.players-search.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players-search',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players-search.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players-search/{id}/show',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerSearchController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerSearchController@show',
        'as' => 'dashboard.players-search.show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players-search',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.clubs.change-logo' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'clubs/change-logo',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubController@changeLogo',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubController@changeLogo',
        'as' => 'dashboard.clubs.change-logo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/clubs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.clubs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clubs/{club}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.clubs.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.clubs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clubs/{club}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.clubs.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.clubs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'clubs/{club}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.clubs.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.players.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'players',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.players.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{player}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.players.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'players/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.players.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'players/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.players.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{team}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@index',
        'as' => 'dashboard.players.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{team}/pdf',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@pdf',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@pdf',
        'as' => 'dashboard.players.pdf',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/show/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@show',
        'as' => 'dashboard.players.show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.first-approve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/first-approve/{player}/{status}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@firstApprove',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@firstApprove',
        'as' => 'dashboard.players.first-approve',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.affiliate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/affiliate/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@affiliate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@affiliate',
        'as' => 'dashboard.players.affiliate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.request-index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/request/index',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@requestIndex',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@requestIndex',
        'as' => 'dashboard.players.request-index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.arrest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/arrest/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@arrest',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@arrest',
        'as' => 'dashboard.players.arrest',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.players.affiliation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/affiliation/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@affiliation',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PlayerController@affiliation',
        'as' => 'dashboard.players.affiliation',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notefications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.notefications.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notefications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.notefications.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notefications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notefications',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.notefications.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notefications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.notefications.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notefications.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/{notefication}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.notefications.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notefications.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.notefications.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notefications.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.notefications.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NoteficationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.message-notefications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.message-notefications.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.message-notefications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.message-notefications.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.message-notefications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'message-notefications',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.message-notefications.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.message-notefications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.message-notefications.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.message-notefications.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/{message_notefication}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.message-notefications.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.message-notefications.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.message-notefications.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.message-notefications.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.message-notefications.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageNoteficationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.group-message-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/group-message-create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@groupMessageCreate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@groupMessageCreate',
        'as' => 'dashboard.club-team-messages.group-message-create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/club-team-messages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-team-messages.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-team-messages.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-team-messages',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-team-messages.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-team-messages.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/{club_team_message}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-team-messages.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-team-messages.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-team-messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-team-messages.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubTeamMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-messages.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-messages.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-messages',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-messages.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages/{club_message}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-messages.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-messages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages/{club_message}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-messages.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'club-messages/{club_message}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-messages.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-messages/{club_message}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-messages.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-manges.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-manges.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-manges.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-manges.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-manges.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-manges',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-manges.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-manges.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges/{club_mange}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-manges.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-manges.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges/{club_mange}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-manges.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-manges.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'club-manges/{club_mange}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-manges.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-manges.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-manges/{club_mange}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.club-manges.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-mange-members.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-mange-members/{clubMange}/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@create',
        'as' => 'dashboard.club-mange-members.create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-mange-members.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-mange-members/{clubMange}/store',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@store',
        'as' => 'dashboard.club-mange-members.store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-mange-members.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-mange-members/{member}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@edit',
        'as' => 'dashboard.club-mange-members.edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-mange-members.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'club-mange-members/{member}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@update',
        'as' => 'dashboard.club-mange-members.update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.club-mange-members.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-mange-members/{member}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ClubMangeMemberController@destroy',
        'as' => 'dashboard.club-mange-members.destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.update-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}/update-status/{status}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@updateStatus',
        'as' => 'dashboard.mettings.update-status',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/mettings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}/print',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@print',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@print',
        'as' => 'dashboard.mettings.print',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/mettings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.mettings.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.mettings.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mettings',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.mettings.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.mettings.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.mettings.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mettings/{metting}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.mettings.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mettings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mettings/{metting}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.mettings.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MettingController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.save-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/save-token',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@saveToken',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@saveToken',
        'as' => 'dashboard.users.save-token',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.change-avatar' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'users/change-avatar',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@changeAvatar',
        'as' => 'dashboard.users.change-avatar',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/profile',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@editPage',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@editPage',
        'as' => 'dashboard.users.profile',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'users/profile',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@updateProfile',
        'as' => 'dashboard.users.',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@edit',
        'as' => 'dashboard.users.edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'users/{user}/update',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@update',
        'as' => 'dashboard.users.update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.users.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.users.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.users.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.users.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.users.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.change-state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loan-players/change-state/{loanPlayer}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@changeState',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@changeState',
        'as' => 'dashboard.loan-players.change-state',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.loan-players.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.loan-players.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loan-players',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.loan-players.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.loan-players.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/{loan_player}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.loan-players.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.loan-players.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.loan-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.loan-players.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\LoanPlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.change-state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer-players/change-state/{transferPlayer}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@changeState',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@changeState',
        'as' => 'dashboard.transfer-players.change-state',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/transfer-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.transfer-players.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.transfer-players.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer-players',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.transfer-players.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.transfer-players.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/{transfer_player}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.transfer-players.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.transfer-players.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.transfer-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.transfer-players.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TransferPlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/show',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@show',
        'as' => 'dashboard.year-updates.show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/year-updates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/teams/{team}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@teamPlayer',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@teamPlayer',
        'as' => 'dashboard.year-updates.team',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/year-updates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.year-updates.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.year-updates.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'year-updates',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.year-updates.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/{year_update}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.year-updates.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'year-updates/{year_update}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.year-updates.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.year-updates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'year-updates/{year_update}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.year-updates.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\YearUpdateController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.change-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/change-status/{post}/{status}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@changeStatus',
        'as' => 'dashboard.posts.change-status',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.posts.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.posts.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'posts',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.posts.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/{post}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.posts.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/{post}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.posts.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'posts/{post}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.posts.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'posts/{post}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.posts.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PostController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.matches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.matches.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.matches.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.matches.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.matches.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'matches',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.matches.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.matches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.matches.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.matches.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches/{match}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.matches.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.matches.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'matches/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.matches.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.matches.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'matches/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.matches.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sponsors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.sponsors.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sponsors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.sponsors.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sponsors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sponsors',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.sponsors.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sponsors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors/{sponsor}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.sponsors.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sponsors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors/{sponsor}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.sponsors.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sponsors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sponsors/{sponsor}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.sponsors.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sponsors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sponsors/{sponsor}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.sponsors.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SponsorsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.feedbacks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feedbacks',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.feedbacks.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeedbackController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeedbackController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.feedbacks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feedbacks/{feedback}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.feedbacks.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeedbackController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeedbackController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.feedbacks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'feedbacks/{feedback}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.feedbacks.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeedbackController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeedbackController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.archive.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/archive',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@indexArchive',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@indexArchive',
        'as' => 'dashboard.competitions.archive.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.archive.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'competitions/{competition}/archive',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@storeArchive',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@storeArchive',
        'as' => 'dashboard.competitions.archive.store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.active' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}/active',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@active',
        'as' => 'dashboard.competitions.active',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.un-active' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}/un-active',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@unActive',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@unActive',
        'as' => 'dashboard.competitions.un-active',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.send-to-mange' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}/send-to-mange',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@sendToMange',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@sendToMange',
        'as' => 'dashboard.competitions.send-to-mange',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.display' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}/display',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@display',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@display',
        'as' => 'dashboard.competitions.display',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.show-team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}/show-team/{competitionTeam}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@teamShow',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@teamShow',
        'as' => 'dashboard.competitions.show-team',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/pdf/{competitionTeam}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@pdf',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@pdf',
        'as' => 'dashboard.competitions.pdf',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.competitions.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.competitions.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'competitions',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.competitions.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.competitions.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.competitions.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.competitions.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competitions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'dashboard.competitions.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-issues.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@index',
        'as' => 'dashboard.competition-issues.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-issues.message-index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/message',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@messageIndex',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@messageIndex',
        'as' => 'dashboard.competition-issues.message-index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-issues.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@create',
        'as' => 'dashboard.competition-issues.create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-issues.message-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/message/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@messageCreate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@messageCreate',
        'as' => 'dashboard.competition-issues.message-create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-issues.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/{competitionIssue}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@show',
        'as' => 'dashboard.competition-issues.show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-issues.close' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/{competitionIssue}/close',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@close',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionIssueController@close',
        'as' => 'dashboard.competition-issues.close',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@index',
        'as' => 'dashboard.competition-matches.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@create',
        'as' => 'dashboard.competition-matches.create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/show/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@show',
        'as' => 'dashboard.competition-matches.show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/edit/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@edit',
        'as' => 'dashboard.competition-matches.edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competition/{competition}/competition-matches/destroy/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@destroy',
        'as' => 'dashboard.competition-matches.destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.refree-report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/refree-report/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@refreeReport',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@refreeReport',
        'as' => 'dashboard.competition-matches.refree-report',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.refree-report.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/refree-report/{match}/pdf',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@refreeReportPdf',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@refreeReportPdf',
        'as' => 'dashboard.competition-matches.refree-report.pdf',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.admin-report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/admin-report/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@adminReport',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@adminReport',
        'as' => 'dashboard.competition-matches.admin-report',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.admin-report.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/admin-report/{match}/pdf',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@adminReportPdf',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@adminReportPdf',
        'as' => 'dashboard.competition-matches.admin-report.pdf',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.competition-matches.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/pdf/{match}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@pdf',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CompetitionMatchController@pdf',
        'as' => 'dashboard.competition-matches.pdf',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.match-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-match/{match}/players/edit/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@edit',
        'as' => 'dashboard.match-players.edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.match-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competition-match/{match}/players/update/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@update',
        'as' => 'dashboard.match-players.update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.match-players.add-goal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'competition-match/{match}/players/add-goal/{player}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@addGoal',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@addGoal',
        'as' => 'dashboard.match-players.add-goal',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.match-players.delete-goal' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competition-match/{match}/players/delete-goal/{player}/{index}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@deleteGoal',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchPlayerController@deleteGoal',
        'as' => 'dashboard.match-players.delete-goal',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.match-assistants.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-match/{match}/assistants/edit/{assistant}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchAssistantController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchAssistantController@edit',
        'as' => 'dashboard.match-assistants.edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition-match/{match}/assistants',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.match-assistants.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competition-match/{match}/assistants/update/{assistant}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MatchAssistantController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MatchAssistantController@update',
        'as' => 'dashboard.match-assistants.update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/competition-match/{match}/assistants',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.out-loan-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@index',
        'as' => 'dashboard.out-loan-players.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.out-loan-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{outLoanPlayer}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@show',
        'as' => 'dashboard.out-loan-players.show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.out-loan-players.approve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{outLoanPlayer}/approve',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@approve',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@approve',
        'as' => 'dashboard.out-loan-players.approve',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.out-loan-players.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{outLoanPlayer}/cancel',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@cancel',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OutLoanPlayerController@cancel',
        'as' => 'dashboard.out-loan-players.cancel',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'info/show',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@show',
        'as' => 'frontend.teams.show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'info/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@edit',
        'as' => 'frontend.teams.edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'info/update',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@update',
        'as' => 'frontend.teams.update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.change-logo' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'info/change-logo',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@changeLogo',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@changeLogo',
        'as' => 'frontend.teams.change-logo',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.edit-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'info/edit-password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
          2 => 'password.confirm:frontend.password.confirm',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@editPassword',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@editPassword',
        'as' => 'frontend.teams.edit-password',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.save-password' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'info/save-password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@savePassword',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@savePassword',
        'as' => 'frontend.teams.save-password',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.upload-header-image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'info/upload-header-image',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@uploadHeaderImage',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@uploadHeaderImage',
        'as' => 'frontend.teams.upload-header-image',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.delete-header-image' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'info/delete-header-image/{image}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@deleteHeaderImage',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@deleteHeaderImage',
        'as' => 'frontend.teams.delete-header-image',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.teams.save-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'info/save-token',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamController@saveToken',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamController@saveToken',
        'as' => 'frontend.teams.save-token',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/info',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/pdf',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@pdf',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@pdf',
        'as' => 'frontend.players.pdf',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.send-to-club' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/send-to-club/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@sendToClub',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@sendToClub',
        'as' => 'frontend.players.send-to-club',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'player' => 'card_id',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.request-index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/request-index',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@requestIndex',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@requestIndex',
        'as' => 'frontend.players.request-index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/checkout-register/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@checkoutRegister',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@checkoutRegister',
        'as' => 'frontend.players.checkout',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.players.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.players.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'players',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.players.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.players.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{player}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.players.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'players/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.players.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'players/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.players.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\PlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.payments.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/success/{type}/{id}/{transaction_id}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@success',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@success',
        'as' => 'frontend.payments.success',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/payments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.payments.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/cancel',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@cancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@cancel',
        'as' => 'frontend.payments.cancel',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/payments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.notefications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.notefications.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.notefications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.notefications.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.notefications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notefications',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.notefications.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.notefications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.notefications.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.notefications.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/{notefication}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.notefications.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.notefications.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.notefications.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.notefications.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.notefications.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NoteficationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message-notefications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.message-notefications.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message-notefications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.message-notefications.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message-notefications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'message-notefications',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.message-notefications.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message-notefications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.message-notefications.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message-notefications.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/{message_notefication}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.message-notefications.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message-notefications.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.message-notefications.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message-notefications.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.message-notefications.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageNoteficationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-messages.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-messages/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-messages.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team-messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-messages.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-messages/{team_message}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-messages.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-messages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-messages/{team_message}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-messages.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'team-messages/{team_message}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-messages.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'team-messages/{team_message}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-messages.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.club-team-messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.club-team-messages.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.club-team-messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.club-team-messages.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.club-team-messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-team-messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.club-team-messages.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.club-team-messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.club-team-messages.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.club-team-messages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/{club_team_message}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.club-team-messages.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.club-team-messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.club-team-messages.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.club-team-messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.club-team-messages.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ClubTeamMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/create/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@create',
        'as' => 'frontend.loan-players.create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loan-players/store/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@store',
        'as' => 'frontend.loan-players.store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.basic-approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loan-players/basic-approve/{loan}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@basicApprove',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@basicApprove',
        'as' => 'frontend.loan-players.basic-approve',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.basic-cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loan-players/basic-cancel/{loan}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@basicCancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@basicCancel',
        'as' => 'frontend.loan-players.basic-cancel',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/checkout-loan/{loan}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@checkoutLoan',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@checkoutLoan',
        'as' => 'frontend.loan-players.checkout',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.loan-players.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.loan-players.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/{loan_player}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.loan-players.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.loan-players.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.loan-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.loan-players.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LoanPlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/create/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@create',
        'as' => 'frontend.transfer-players.create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/transfer-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer-players/store/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@store',
        'as' => 'frontend.transfer-players.store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/transfer-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.basic-approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer-players/basic-approve/{transfer}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@basicApprove',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@basicApprove',
        'as' => 'frontend.transfer-players.basic-approve',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/transfer-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.basic-cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer-players/basic-cancel/{transfer}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@basicCancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@basicCancel',
        'as' => 'frontend.transfer-players.basic-cancel',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/transfer-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/checkout-loan/{transfer}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@checkoutTransfer',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@checkoutTransfer',
        'as' => 'frontend.transfer-players.checkout',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/transfer-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.transfer-players.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.transfer-players.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/{transfer_player}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.transfer-players.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.transfer-players.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.transfer-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.transfer-players.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TransferPlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.year-updates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/show',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\YearUpdateController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\YearUpdateController@show',
        'as' => 'frontend.year-updates.show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/year-updates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.year-updates.cancel-player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/cancel-player/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\YearUpdateController@cancelPlayer',
        'controller' => 'App\\Http\\Controllers\\Frontend\\YearUpdateController@cancelPlayer',
        'as' => 'frontend.year-updates.cancel-player',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/year-updates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.year-updates.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/checkout-year-update/{yearUpdate}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\YearUpdateController@checkout',
        'controller' => 'App\\Http\\Controllers\\Frontend\\YearUpdateController@checkout',
        'as' => 'frontend.year-updates.checkout',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/year-updates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-manges.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-manges',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-manges.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-manges.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-manges/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-manges.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-manges.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team-manges',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-manges.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-manges.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-manges/{team_mange}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-manges.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-manges.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-manges/{team_mange}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-manges.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-manges.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'team-manges/{team_mange}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-manges.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-manges.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'team-manges/{team_mange}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.team-manges.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-mange-members.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-mange-members/{teamMange}/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@create',
        'as' => 'frontend.team-mange-members.create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/team-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-mange-members.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team-mange-members/{teamMange}/store',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@store',
        'as' => 'frontend.team-mange-members.store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/team-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-mange-members.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-mange-members/{member}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@edit',
        'as' => 'frontend.team-mange-members.edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/team-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-mange-members.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'team-mange-members/{member}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@update',
        'as' => 'frontend.team-mange-members.update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/team-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team-mange-members.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'team-mange-members/{member}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TeamMangeMemberController@destroy',
        'as' => 'frontend.team-mange-members.destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/team-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.subscripe' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/subscripe/{competition}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@Subscripe',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@Subscripe',
        'as' => 'frontend.competitions.subscripe',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.un-subscripe' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/un-subscripe/{competition}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@unSubscripe',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@unSubscripe',
        'as' => 'frontend.competitions.un-subscripe',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.setup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/setup/{competition}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@setup',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@setup',
        'as' => 'frontend.competitions.setup',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.competitions.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.competitions.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'competitions',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.competitions.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.competitions.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.competitions.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.competitions.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competitions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.competitions.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-issues.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@index',
        'as' => 'frontend.competition-issues.index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-issues.message-index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/messages',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@messageIndex',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@messageIndex',
        'as' => 'frontend.competition-issues.message-index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-issues.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@create',
        'as' => 'frontend.competition-issues.create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-issues.message-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/messages/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@messageCreate',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@messageCreate',
        'as' => 'frontend.competition-issues.message-create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-issues.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/{competitionIssue}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionIssueController@show',
        'as' => 'frontend.competition-issues.show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-matches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionMatchController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionMatchController@index',
        'as' => 'frontend.competition-matches.index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-matches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/show/{match}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionMatchController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionMatchController@show',
        'as' => 'frontend.competition-matches.show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-matches.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/pdf/{match}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionMatchController@pdf',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionMatchController@pdf',
        'as' => 'frontend.competition-matches.pdf',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.match-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-match/{match}/players/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MatchPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MatchPlayerController@create',
        'as' => 'frontend.match-players.create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.match-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competition-match/{match}/players/{player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MatchPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MatchPlayerController@destroy',
        'as' => 'frontend.match-players.destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.match-assistants.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-match/{match}/assistants/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MatchAssistantController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MatchAssistantController@create',
        'as' => 'frontend.match-assistants.create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-match/{match}/assistants',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.match-assistants.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competition-match/{match}/assistants/{assistant}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MatchAssistantController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MatchAssistantController@destroy',
        'as' => 'frontend.match-assistants.destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-match/{match}/assistants',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-teams.delete-member' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-teams/{competitionTeam}/{assistant}/delete-member',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deleteMember',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deleteMember',
        'as' => 'frontend.competition-teams.delete-member',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-teams.delete-player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-teams/{competitionTeam}/{player}/delete-player',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deletePlayer',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deletePlayer',
        'as' => 'frontend.competition-teams.delete-player',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-teams.delete-loan-in-player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-teams/{competitionTeam}/{player}/delete-loan-in-player',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deleteLoanInPlayer',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deleteLoanInPlayer',
        'as' => 'frontend.competition-teams.delete-loan-in-player',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-teams.delete-loan-out-player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-teams/{competitionTeam}/{player}/delete-loan-out-player',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deleteLoanOutPlayer',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@deleteLoanOutPlayer',
        'as' => 'frontend.competition-teams.delete-loan-out-player',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-teams.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-teams/{competitionTeam}/register',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@register',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@register',
        'as' => 'frontend.competition-teams.register',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-teams.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-teams/{competitionTeam}/checkout',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@checkout',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@checkout',
        'as' => 'frontend.competition-teams.checkout',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.competition-teams.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-teams/{competitionTeam}/pdf',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@pdf',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CompetitionTeamController@pdf',
        'as' => 'frontend.competition-teams.pdf',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/competition-teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.assistants.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'assistants',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.assistants.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\AssistantController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AssistantController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.assistants.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'assistants/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.assistants.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\AssistantController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AssistantController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.assistants.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'assistants',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.assistants.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\AssistantController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AssistantController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.assistants.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'assistants/{assistant}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.assistants.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\AssistantController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AssistantController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.assistants.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'assistants/{assistant}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.assistants.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\AssistantController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AssistantController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.assistants.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'assistants/{assistant}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.assistants.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\AssistantController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AssistantController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.assistants.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'assistants/{assistant}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.assistants.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\AssistantController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AssistantController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.send-to-club' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/send-to-club/{outLoanPlayer}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@sendToClub',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@sendToClub',
        'as' => 'frontend.out-loan-players.send-to-club',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/checkout/{loan}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@checkout',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@checkout',
        'as' => 'frontend.out-loan-players.checkout',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.out-loan-players.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@index',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/create',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.out-loan-players.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@create',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'out-loan-players',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.out-loan-players.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{out_loan_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.out-loan-players.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@show',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{out_loan_player}/edit',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.out-loan-players.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'out-loan-players/{out_loan_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.out-loan-players.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.out-loan-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'out-loan-players/{out_loan_player}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'as' => 'frontend.out-loan-players.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OutLoanPlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\AuthenticatedSessionController@create',
        'as' => 'frontend.login',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\AuthenticatedSessionController@store',
        'as' => 'frontend.',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\PasswordResetLinkController@create',
        'as' => 'frontend.password.request',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\PasswordResetLinkController@store',
        'as' => 'frontend.password.email',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\NewPasswordController@create',
        'as' => 'frontend.password.reset',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\NewPasswordController@store',
        'as' => 'frontend.password.update',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\ConfirmablePasswordController@show',
        'as' => 'frontend.password.confirm',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.generated::tN1pmdACcTD4tcfZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\ConfirmablePasswordController@store',
        'as' => 'frontend.generated::tN1pmdACcTD4tcfZ',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'domain' => 'http://teams.qu.demo',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:team',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Auth\\AuthenticatedSessionController@destroy',
        'as' => 'frontend.logout',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/permissions',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.permissions.index',
        'uses' => 'Laratrust\\Http\\Controllers\\PermissionsController@index',
        'controller' => 'Laratrust\\Http\\Controllers\\PermissionsController@index',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.permissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/permissions/{permission}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.permissions.edit',
        'uses' => 'Laratrust\\Http\\Controllers\\PermissionsController@edit',
        'controller' => 'Laratrust\\Http\\Controllers\\PermissionsController@edit',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'laratrust/permissions/{permission}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.permissions.update',
        'uses' => 'Laratrust\\Http\\Controllers\\PermissionsController@update',
        'controller' => 'Laratrust\\Http\\Controllers\\PermissionsController@update',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/roles',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles.index',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesController@index',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesController@index',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/roles/create',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles.create',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesController@create',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesController@create',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'laratrust/roles',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles.store',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesController@store',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesController@store',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/roles/{role}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles.show',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesController@show',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesController@show',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/roles/{role}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles.edit',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesController@edit',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesController@edit',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'laratrust/roles/{role}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles.update',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesController@update',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesController@update',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'laratrust/roles/{role}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles.destroy',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesController@destroy',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesController@destroy',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles-assignment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/roles-assignment',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles-assignment.index',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesAssignmentController@index',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesAssignmentController@index',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles-assignment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laratrust/roles-assignment/{roles_assignment}/edit',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles-assignment.edit',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesAssignmentController@edit',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesAssignmentController@edit',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laratrust.roles-assignment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'laratrust/roles-assignment/{roles_assignment}',
      'action' => 
      array (
        'domain' => 'http://localhost',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'role:superadministrator',
        ),
        'as' => 'laratrust.roles-assignment.update',
        'uses' => 'Laratrust\\Http\\Controllers\\RolesAssignmentController@update',
        'controller' => 'Laratrust\\Http\\Controllers\\RolesAssignmentController@update',
        'namespace' => 'Laratrust\\Http\\Controllers',
        'prefix' => 'laratrust/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.change-logo' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'teams/{team}/change-logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@changeLogo',
        'controller' => 'App\\Http\\Controllers\\TeamController@changeLogo',
        'as' => 'teams.change-logo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.edit-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}/edit-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@editPassword',
        'controller' => 'App\\Http\\Controllers\\TeamController@editPassword',
        'as' => 'teams.edit-password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.save-password' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'teams/{team}/save-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@savePassword',
        'controller' => 'App\\Http\\Controllers\\TeamController@savePassword',
        'as' => 'teams.save-password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.show-assistant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}/assistant/{assistant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@showAssistant',
        'controller' => 'App\\Http\\Controllers\\TeamController@showAssistant',
        'as' => 'teams.show-assistant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/teams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'teams.index',
        'uses' => 'App\\Http\\Controllers\\TeamController@index',
        'controller' => 'App\\Http\\Controllers\\TeamController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'teams.create',
        'uses' => 'App\\Http\\Controllers\\TeamController@create',
        'controller' => 'App\\Http\\Controllers\\TeamController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'teams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'teams.store',
        'uses' => 'App\\Http\\Controllers\\TeamController@store',
        'controller' => 'App\\Http\\Controllers\\TeamController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'teams.show',
        'uses' => 'App\\Http\\Controllers\\TeamController@show',
        'controller' => 'App\\Http\\Controllers\\TeamController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'teams.edit',
        'uses' => 'App\\Http\\Controllers\\TeamController@edit',
        'controller' => 'App\\Http\\Controllers\\TeamController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'teams.update',
        'uses' => 'App\\Http\\Controllers\\TeamController@update',
        'controller' => 'App\\Http\\Controllers\\TeamController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'teams.destroy',
        'uses' => 'App\\Http\\Controllers\\TeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\TeamController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players-search.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerSearchController@index',
        'controller' => 'App\\Http\\Controllers\\PlayerSearchController@index',
        'as' => 'players-search.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players-search',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players-search.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players-search/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerSearchController@show',
        'controller' => 'App\\Http\\Controllers\\PlayerSearchController@show',
        'as' => 'players-search.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players-search',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clubs.change-logo' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'clubs/change-logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClubController@changeLogo',
        'controller' => 'App\\Http\\Controllers\\ClubController@changeLogo',
        'as' => 'clubs.change-logo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/clubs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clubs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clubs/{club}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'clubs.show',
        'uses' => 'App\\Http\\Controllers\\ClubController@show',
        'controller' => 'App\\Http\\Controllers\\ClubController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clubs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clubs/{club}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'clubs.edit',
        'uses' => 'App\\Http\\Controllers\\ClubController@edit',
        'controller' => 'App\\Http\\Controllers\\ClubController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clubs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'clubs/{club}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'clubs.update',
        'uses' => 'App\\Http\\Controllers\\ClubController@update',
        'controller' => 'App\\Http\\Controllers\\ClubController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'players.create',
        'uses' => 'App\\Http\\Controllers\\PlayerController@create',
        'controller' => 'App\\Http\\Controllers\\PlayerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'players',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'players.store',
        'uses' => 'App\\Http\\Controllers\\PlayerController@store',
        'controller' => 'App\\Http\\Controllers\\PlayerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{player}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'players.edit',
        'uses' => 'App\\Http\\Controllers\\PlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\PlayerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'players/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'players.update',
        'uses' => 'App\\Http\\Controllers\\PlayerController@update',
        'controller' => 'App\\Http\\Controllers\\PlayerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'players/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'players.destroy',
        'uses' => 'App\\Http\\Controllers\\PlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\PlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@index',
        'controller' => 'App\\Http\\Controllers\\PlayerController@index',
        'as' => 'players.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/{team}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@pdf',
        'controller' => 'App\\Http\\Controllers\\PlayerController@pdf',
        'as' => 'players.pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/show/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@show',
        'controller' => 'App\\Http\\Controllers\\PlayerController@show',
        'as' => 'players.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.first-approve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/first-approve/{player}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@firstApprove',
        'controller' => 'App\\Http\\Controllers\\PlayerController@firstApprove',
        'as' => 'players.first-approve',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.affiliate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/affiliate/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@affiliate',
        'controller' => 'App\\Http\\Controllers\\PlayerController@affiliate',
        'as' => 'players.affiliate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.request-index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/request/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@requestIndex',
        'controller' => 'App\\Http\\Controllers\\PlayerController@requestIndex',
        'as' => 'players.request-index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.arrest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/arrest/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@arrest',
        'controller' => 'App\\Http\\Controllers\\PlayerController@arrest',
        'as' => 'players.arrest',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'players.affiliation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'players/affiliation/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayerController@affiliation',
        'controller' => 'App\\Http\\Controllers\\PlayerController@affiliation',
        'as' => 'players.affiliation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notefications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'notefications.index',
        'uses' => 'App\\Http\\Controllers\\NoteficationController@index',
        'controller' => 'App\\Http\\Controllers\\NoteficationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notefications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'notefications.create',
        'uses' => 'App\\Http\\Controllers\\NoteficationController@create',
        'controller' => 'App\\Http\\Controllers\\NoteficationController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notefications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notefications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'notefications.store',
        'uses' => 'App\\Http\\Controllers\\NoteficationController@store',
        'controller' => 'App\\Http\\Controllers\\NoteficationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notefications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'notefications.show',
        'uses' => 'App\\Http\\Controllers\\NoteficationController@show',
        'controller' => 'App\\Http\\Controllers\\NoteficationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notefications.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notefications/{notefication}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'notefications.edit',
        'uses' => 'App\\Http\\Controllers\\NoteficationController@edit',
        'controller' => 'App\\Http\\Controllers\\NoteficationController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notefications.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'notefications.update',
        'uses' => 'App\\Http\\Controllers\\NoteficationController@update',
        'controller' => 'App\\Http\\Controllers\\NoteficationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notefications.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'notefications/{notefication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'notefications.destroy',
        'uses' => 'App\\Http\\Controllers\\NoteficationController@destroy',
        'controller' => 'App\\Http\\Controllers\\NoteficationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message-notefications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'message-notefications.index',
        'uses' => 'App\\Http\\Controllers\\MessageNoteficationController@index',
        'controller' => 'App\\Http\\Controllers\\MessageNoteficationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message-notefications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'message-notefications.create',
        'uses' => 'App\\Http\\Controllers\\MessageNoteficationController@create',
        'controller' => 'App\\Http\\Controllers\\MessageNoteficationController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message-notefications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'message-notefications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'message-notefications.store',
        'uses' => 'App\\Http\\Controllers\\MessageNoteficationController@store',
        'controller' => 'App\\Http\\Controllers\\MessageNoteficationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message-notefications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'message-notefications.show',
        'uses' => 'App\\Http\\Controllers\\MessageNoteficationController@show',
        'controller' => 'App\\Http\\Controllers\\MessageNoteficationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message-notefications.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'message-notefications/{message_notefication}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'message-notefications.edit',
        'uses' => 'App\\Http\\Controllers\\MessageNoteficationController@edit',
        'controller' => 'App\\Http\\Controllers\\MessageNoteficationController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message-notefications.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'message-notefications.update',
        'uses' => 'App\\Http\\Controllers\\MessageNoteficationController@update',
        'controller' => 'App\\Http\\Controllers\\MessageNoteficationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message-notefications.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'message-notefications/{message_notefication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'message-notefications.destroy',
        'uses' => 'App\\Http\\Controllers\\MessageNoteficationController@destroy',
        'controller' => 'App\\Http\\Controllers\\MessageNoteficationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.group-message-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/group-message-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@groupMessageCreate',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@groupMessageCreate',
        'as' => 'club-team-messages.group-message-create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/club-team-messages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-team-messages.index',
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@index',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-team-messages.create',
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@create',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-team-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-team-messages.store',
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@store',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-team-messages.show',
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@show',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-team-messages/{club_team_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-team-messages.edit',
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-team-messages.update',
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@update',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-team-messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-team-messages/{club_team_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-team-messages.destroy',
        'uses' => 'App\\Http\\Controllers\\ClubTeamMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClubTeamMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-messages.index',
        'uses' => 'App\\Http\\Controllers\\ClubMessageController@index',
        'controller' => 'App\\Http\\Controllers\\ClubMessageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-messages.create',
        'uses' => 'App\\Http\\Controllers\\ClubMessageController@create',
        'controller' => 'App\\Http\\Controllers\\ClubMessageController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-messages.store',
        'uses' => 'App\\Http\\Controllers\\ClubMessageController@store',
        'controller' => 'App\\Http\\Controllers\\ClubMessageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages/{club_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-messages.show',
        'uses' => 'App\\Http\\Controllers\\ClubMessageController@show',
        'controller' => 'App\\Http\\Controllers\\ClubMessageController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-messages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-messages/{club_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-messages.edit',
        'uses' => 'App\\Http\\Controllers\\ClubMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\ClubMessageController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'club-messages/{club_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-messages.update',
        'uses' => 'App\\Http\\Controllers\\ClubMessageController@update',
        'controller' => 'App\\Http\\Controllers\\ClubMessageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-messages/{club_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-messages.destroy',
        'uses' => 'App\\Http\\Controllers\\ClubMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClubMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-manges.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-manges.index',
        'uses' => 'App\\Http\\Controllers\\ClubMangeController@index',
        'controller' => 'App\\Http\\Controllers\\ClubMangeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-manges.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-manges.create',
        'uses' => 'App\\Http\\Controllers\\ClubMangeController@create',
        'controller' => 'App\\Http\\Controllers\\ClubMangeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-manges.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-manges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-manges.store',
        'uses' => 'App\\Http\\Controllers\\ClubMangeController@store',
        'controller' => 'App\\Http\\Controllers\\ClubMangeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-manges.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges/{club_mange}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-manges.show',
        'uses' => 'App\\Http\\Controllers\\ClubMangeController@show',
        'controller' => 'App\\Http\\Controllers\\ClubMangeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-manges.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-manges/{club_mange}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-manges.edit',
        'uses' => 'App\\Http\\Controllers\\ClubMangeController@edit',
        'controller' => 'App\\Http\\Controllers\\ClubMangeController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-manges.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'club-manges/{club_mange}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-manges.update',
        'uses' => 'App\\Http\\Controllers\\ClubMangeController@update',
        'controller' => 'App\\Http\\Controllers\\ClubMangeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-manges.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-manges/{club_mange}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'club-manges.destroy',
        'uses' => 'App\\Http\\Controllers\\ClubMangeController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClubMangeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-mange-members.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-mange-members/{clubMange}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClubMangeMemberController@create',
        'controller' => 'App\\Http\\Controllers\\ClubMangeMemberController@create',
        'as' => 'club-mange-members.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-mange-members.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'club-mange-members/{clubMange}/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClubMangeMemberController@store',
        'controller' => 'App\\Http\\Controllers\\ClubMangeMemberController@store',
        'as' => 'club-mange-members.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-mange-members.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'club-mange-members/{member}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClubMangeMemberController@edit',
        'controller' => 'App\\Http\\Controllers\\ClubMangeMemberController@edit',
        'as' => 'club-mange-members.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-mange-members.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'club-mange-members/{member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClubMangeMemberController@update',
        'controller' => 'App\\Http\\Controllers\\ClubMangeMemberController@update',
        'as' => 'club-mange-members.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'club-mange-members.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'club-mange-members/{member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClubMangeMemberController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClubMangeMemberController@destroy',
        'as' => 'club-mange-members.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/club-mange-members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.update-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}/update-status/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MettingController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\MettingController@updateStatus',
        'as' => 'mettings.update-status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/mettings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}/print',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MettingController@print',
        'controller' => 'App\\Http\\Controllers\\MettingController@print',
        'as' => 'mettings.print',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/mettings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'mettings.index',
        'uses' => 'App\\Http\\Controllers\\MettingController@index',
        'controller' => 'App\\Http\\Controllers\\MettingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'mettings.create',
        'uses' => 'App\\Http\\Controllers\\MettingController@create',
        'controller' => 'App\\Http\\Controllers\\MettingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'mettings.store',
        'uses' => 'App\\Http\\Controllers\\MettingController@store',
        'controller' => 'App\\Http\\Controllers\\MettingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'mettings.show',
        'uses' => 'App\\Http\\Controllers\\MettingController@show',
        'controller' => 'App\\Http\\Controllers\\MettingController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mettings/{metting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'mettings.edit',
        'uses' => 'App\\Http\\Controllers\\MettingController@edit',
        'controller' => 'App\\Http\\Controllers\\MettingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mettings/{metting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'mettings.update',
        'uses' => 'App\\Http\\Controllers\\MettingController@update',
        'controller' => 'App\\Http\\Controllers\\MettingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mettings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mettings/{metting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'mettings.destroy',
        'uses' => 'App\\Http\\Controllers\\MettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\MettingController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.save-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/save-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@saveToken',
        'controller' => 'App\\Http\\Controllers\\UserController@saveToken',
        'as' => 'users.save-token',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.change-avatar' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'users/change-avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\UserController@changeAvatar',
        'as' => 'users.change-avatar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@editPage',
        'controller' => 'App\\Http\\Controllers\\UserController@editPage',
        'as' => 'users.profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'users/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'as' => 'users.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\UserController@edit',
        'as' => 'users.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'users/{user}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'as' => 'users.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'users.create',
        'uses' => 'App\\Http\\Controllers\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\UserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'users.store',
        'uses' => 'App\\Http\\Controllers\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.change-state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loan-players/change-state/{loanPlayer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@changeState',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@changeState',
        'as' => 'loan-players.change-state',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'loan-players.index',
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'loan-players.create',
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loan-players',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'loan-players.store',
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@store',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'loan-players.show',
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-players/{loan_player}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'loan-players.edit',
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'loan-players.update',
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'loan-players/{loan_player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'loan-players.destroy',
        'uses' => 'App\\Http\\Controllers\\LoanPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\LoanPlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.change-state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer-players/change-state/{transferPlayer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@changeState',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@changeState',
        'as' => 'transfer-players.change-state',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/transfer-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'transfer-players.index',
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'transfer-players.create',
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@create',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer-players',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'transfer-players.store',
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@store',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'transfer-players.show',
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer-players/{transfer_player}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'transfer-players.edit',
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'transfer-players.update',
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-players.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'transfer-players/{transfer_player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'transfer-players.destroy',
        'uses' => 'App\\Http\\Controllers\\TransferPlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\TransferPlayerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@show',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@show',
        'as' => 'year-updates.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/year-updates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@teamPlayer',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@teamPlayer',
        'as' => 'year-updates.team',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/year-updates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'year-updates.index',
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@index',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'year-updates.create',
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@create',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'year-updates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'year-updates.store',
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@store',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'year-updates/{year_update}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'year-updates.edit',
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@edit',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'year-updates/{year_update}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'year-updates.update',
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@update',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'year-updates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'year-updates/{year_update}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'year-updates.destroy',
        'uses' => 'App\\Http\\Controllers\\YearUpdateController@destroy',
        'controller' => 'App\\Http\\Controllers\\YearUpdateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.change-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/change-status/{post}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PostController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\PostController@changeStatus',
        'as' => 'posts.change-status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'posts.index',
        'uses' => 'App\\Http\\Controllers\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\PostController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'posts.create',
        'uses' => 'App\\Http\\Controllers\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\PostController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'posts.store',
        'uses' => 'App\\Http\\Controllers\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\PostController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'posts.show',
        'uses' => 'App\\Http\\Controllers\\PostController@show',
        'controller' => 'App\\Http\\Controllers\\PostController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'posts.edit',
        'uses' => 'App\\Http\\Controllers\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\PostController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'posts.update',
        'uses' => 'App\\Http\\Controllers\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\PostController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'posts.destroy',
        'uses' => 'App\\Http\\Controllers\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\PostController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'matches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'matches.index',
        'uses' => 'App\\Http\\Controllers\\MatchController@index',
        'controller' => 'App\\Http\\Controllers\\MatchController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'matches.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'matches.create',
        'uses' => 'App\\Http\\Controllers\\MatchController@create',
        'controller' => 'App\\Http\\Controllers\\MatchController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'matches.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'matches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'matches.store',
        'uses' => 'App\\Http\\Controllers\\MatchController@store',
        'controller' => 'App\\Http\\Controllers\\MatchController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'matches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'matches.show',
        'uses' => 'App\\Http\\Controllers\\MatchController@show',
        'controller' => 'App\\Http\\Controllers\\MatchController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'matches.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'matches/{match}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'matches.edit',
        'uses' => 'App\\Http\\Controllers\\MatchController@edit',
        'controller' => 'App\\Http\\Controllers\\MatchController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'matches.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'matches/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'matches.update',
        'uses' => 'App\\Http\\Controllers\\MatchController@update',
        'controller' => 'App\\Http\\Controllers\\MatchController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'matches.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'matches/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'matches.destroy',
        'uses' => 'App\\Http\\Controllers\\MatchController@destroy',
        'controller' => 'App\\Http\\Controllers\\MatchController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'sponsors.index',
        'uses' => 'App\\Http\\Controllers\\SponsorsController@index',
        'controller' => 'App\\Http\\Controllers\\SponsorsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'sponsors.create',
        'uses' => 'App\\Http\\Controllers\\SponsorsController@create',
        'controller' => 'App\\Http\\Controllers\\SponsorsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sponsors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'sponsors.store',
        'uses' => 'App\\Http\\Controllers\\SponsorsController@store',
        'controller' => 'App\\Http\\Controllers\\SponsorsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors/{sponsor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'sponsors.show',
        'uses' => 'App\\Http\\Controllers\\SponsorsController@show',
        'controller' => 'App\\Http\\Controllers\\SponsorsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsors/{sponsor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'sponsors.edit',
        'uses' => 'App\\Http\\Controllers\\SponsorsController@edit',
        'controller' => 'App\\Http\\Controllers\\SponsorsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sponsors/{sponsor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'sponsors.update',
        'uses' => 'App\\Http\\Controllers\\SponsorsController@update',
        'controller' => 'App\\Http\\Controllers\\SponsorsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sponsors/{sponsor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'sponsors.destroy',
        'uses' => 'App\\Http\\Controllers\\SponsorsController@destroy',
        'controller' => 'App\\Http\\Controllers\\SponsorsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feedbacks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feedbacks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'feedbacks.index',
        'uses' => 'App\\Http\\Controllers\\FeedbackController@index',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feedbacks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feedbacks/{feedback}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'feedbacks.show',
        'uses' => 'App\\Http\\Controllers\\FeedbackController@show',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feedbacks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'feedbacks/{feedback}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'feedbacks.destroy',
        'uses' => 'App\\Http\\Controllers\\FeedbackController@destroy',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.archive.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/archive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@indexArchive',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@indexArchive',
        'as' => 'competitions.archive.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.archive.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'competitions/{competition}/archive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@storeArchive',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@storeArchive',
        'as' => 'competitions.archive.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.active' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@active',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@active',
        'as' => 'competitions.active',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.un-active' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}/un-active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@unActive',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@unActive',
        'as' => 'competitions.un-active',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.send-to-mange' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}/send-to-mange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@sendToMange',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@sendToMange',
        'as' => 'competitions.send-to-mange',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.display' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}/display',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@display',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@display',
        'as' => 'competitions.display',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.show-team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}/show-team/{competitionTeam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@teamShow',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@teamShow',
        'as' => 'competitions.show-team',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/pdf/{competitionTeam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionController@pdf',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@pdf',
        'as' => 'competitions.pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competitions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'competitions.index',
        'uses' => 'App\\Http\\Controllers\\CompetitionController@index',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'competitions.create',
        'uses' => 'App\\Http\\Controllers\\CompetitionController@create',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'competitions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'competitions.store',
        'uses' => 'App\\Http\\Controllers\\CompetitionController@store',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'competitions.show',
        'uses' => 'App\\Http\\Controllers\\CompetitionController@show',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competitions/{competition}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'competitions.edit',
        'uses' => 'App\\Http\\Controllers\\CompetitionController@edit',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'competitions.update',
        'uses' => 'App\\Http\\Controllers\\CompetitionController@update',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competitions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competitions/{competition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'as' => 'competitions.destroy',
        'uses' => 'App\\Http\\Controllers\\CompetitionController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompetitionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-issues.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionIssueController@index',
        'controller' => 'App\\Http\\Controllers\\CompetitionIssueController@index',
        'as' => 'competition-issues.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-issues.message-index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionIssueController@messageIndex',
        'controller' => 'App\\Http\\Controllers\\CompetitionIssueController@messageIndex',
        'as' => 'competition-issues.message-index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-issues.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionIssueController@create',
        'controller' => 'App\\Http\\Controllers\\CompetitionIssueController@create',
        'as' => 'competition-issues.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-issues.message-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionIssueController@messageCreate',
        'controller' => 'App\\Http\\Controllers\\CompetitionIssueController@messageCreate',
        'as' => 'competition-issues.message-create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-issues.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/{competitionIssue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionIssueController@show',
        'controller' => 'App\\Http\\Controllers\\CompetitionIssueController@show',
        'as' => 'competition-issues.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-issues.close' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-issues/{competitionIssue}/close',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionIssueController@close',
        'controller' => 'App\\Http\\Controllers\\CompetitionIssueController@close',
        'as' => 'competition-issues.close',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-issues',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@index',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@index',
        'as' => 'competition-matches.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@create',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@create',
        'as' => 'competition-matches.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/show/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@show',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@show',
        'as' => 'competition-matches.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/edit/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@edit',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@edit',
        'as' => 'competition-matches.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competition/{competition}/competition-matches/destroy/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@destroy',
        'as' => 'competition-matches.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.refree-report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/refree-report/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@refreeReport',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@refreeReport',
        'as' => 'competition-matches.refree-report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.refree-report.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/refree-report/{match}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@refreeReportPdf',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@refreeReportPdf',
        'as' => 'competition-matches.refree-report.pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.admin-report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/admin-report/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@adminReport',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@adminReport',
        'as' => 'competition-matches.admin-report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.admin-report.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/admin-report/{match}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@adminReportPdf',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@adminReportPdf',
        'as' => 'competition-matches.admin-report.pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competition-matches.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition/{competition}/competition-matches/pdf/{match}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompetitionMatchController@pdf',
        'controller' => 'App\\Http\\Controllers\\CompetitionMatchController@pdf',
        'as' => 'competition-matches.pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition/{competition}/competition-matches',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'match-players.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-match/{match}/players/edit/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MatchPlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\MatchPlayerController@edit',
        'as' => 'match-players.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'match-players.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competition-match/{match}/players/update/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MatchPlayerController@update',
        'controller' => 'App\\Http\\Controllers\\MatchPlayerController@update',
        'as' => 'match-players.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'match-players.add-goal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'competition-match/{match}/players/add-goal/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MatchPlayerController@addGoal',
        'controller' => 'App\\Http\\Controllers\\MatchPlayerController@addGoal',
        'as' => 'match-players.add-goal',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'match-players.delete-goal' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'competition-match/{match}/players/delete-goal/{player}/{index}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MatchPlayerController@deleteGoal',
        'controller' => 'App\\Http\\Controllers\\MatchPlayerController@deleteGoal',
        'as' => 'match-players.delete-goal',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition-match/{match}/players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'match-assistants.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'competition-match/{match}/assistants/edit/{assistant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MatchAssistantController@edit',
        'controller' => 'App\\Http\\Controllers\\MatchAssistantController@edit',
        'as' => 'match-assistants.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition-match/{match}/assistants',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'match-assistants.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'competition-match/{match}/assistants/update/{assistant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MatchAssistantController@update',
        'controller' => 'App\\Http\\Controllers\\MatchAssistantController@update',
        'as' => 'match-assistants.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/competition-match/{match}/assistants',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'out-loan-players.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OutLoanPlayerController@index',
        'controller' => 'App\\Http\\Controllers\\OutLoanPlayerController@index',
        'as' => 'out-loan-players.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'out-loan-players.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{outLoanPlayer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OutLoanPlayerController@show',
        'controller' => 'App\\Http\\Controllers\\OutLoanPlayerController@show',
        'as' => 'out-loan-players.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'out-loan-players.approve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{outLoanPlayer}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OutLoanPlayerController@approve',
        'controller' => 'App\\Http\\Controllers\\OutLoanPlayerController@approve',
        'as' => 'out-loan-players.approve',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'out-loan-players.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'out-loan-players/{outLoanPlayer}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OutLoanPlayerController@cancel',
        'controller' => 'App\\Http\\Controllers\\OutLoanPlayerController@cancel',
        'as' => 'out-loan-players.cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/out-loan-players',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
