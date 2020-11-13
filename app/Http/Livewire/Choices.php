<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Http\Livewire\Field;

use App\Models\Choice;

class Choices extends Component
{

    public $choices, $choice_id, $question, $question_id = [], $choice_txt;

    public $updateMode = false;

    public $inputs = [];

    public $i = 1;


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields()
    {
        $this->choice_txt = '';
        $this->question_id = '';
    }

    public function mount($id)
    {

        $quiz = Question::findOrFail($id);

        $this->question = $quiz;

        $this->question_id = $quiz->id;

        $this->choices = $this->question->choices;

        // dd( $this->choices);

    }


    public function render()
    {
        $this->question = Question::with('choices')->find($this->question_id);

        return view('livewire.Choice.choices');
    }


    public function store()
    {
        $validatedDate = $this->validate(
            [
                // 'question_id.0' => 'required',
                'choice_txt.0' => 'required',
                // 'question_id.*' => 'required',
                'choice_txt.*' => 'required',
            ],
            [
                // 'question_id.0.required' => 'question_id field is required',
                'choice_txt.0.required' => 'Choice field is required',
                // 'question_id.*.required' => 'question_id field is required',
                'choice_txt.*.required' => 'Choice field is required',
            ]
        );

        foreach ($this->choice_txt as $key => $value) {

            $Inputchoice = new Choice;
            $Inputchoice->choice_txt = $this->choice_txt[$key];
            $Inputchoice->question_id = $this->question_id ;
            // dump($Inputchoice);
            $Inputchoice->save();
            // if (!empty($this->question_id)) {
            //     Choice::create(['question_id' => $this->question_id[$key], 'choice_txt' => $this->choice_txt[$key]]);
            // }
        }

       
        //  $this->question->choices()->save($Inputchoice);

        // $this->question->choices()->create([
        //     'choice_txt' => $this->choice_txt[$key]
        // ]);
        // dd($key);

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Choice(s) Created Successfully.');
    }
}
