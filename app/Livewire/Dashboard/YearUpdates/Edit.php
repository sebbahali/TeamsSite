<?php

namespace App\Http\Livewire\Dashboard\YearUpdates;

use App\Models\YearUpdate;
use Livewire\Component;

class Edit extends Component
{
    public $year;

    public $start;

    public $end;

    protected $rules = [
        'start' => ['required', 'date'],
        'end' => ['required', 'date'],
    ];



    public function mount(YearUpdate $year)
    {
        $this->year = $year;
        $this->start = $year->start;
        $this->end = $year->end;
    }

    public function save()
    {
        $this->validate();

        $this->year->start = $this->start;
        $this->year->end = $this->end;
        $this->year->save();

        session()->flash('success_message', 'تم تعديل التجديد السنوي بنجاح');

        return redirect()->route('dashboard.year-updates.create');
    }

    public function render()
    {
        return view('livewire.dashboard.year-updates.edit');
    }
}
