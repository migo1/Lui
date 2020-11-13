<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class AssesQuiz extends Component
{

    public $questions, $question_id, $text;
    public $isOpen = 0;
    
    public $updateMode = false;

    public function render()
    {
        $this->questions = Question::all();

        return view('livewire.assess_quiz.asses-quiz');
    }

    public function create()

    {

        $this->resetInputFields();

        // $this->openModal();

    }

    // public function openModal()
    // {
    //     $this->isOpen = true;

    // }

    // public function closeModal()
    // {
    //     $this->isOpen = false;
    // }

    private function resetInputFields()
    {

        $this->text = '';

        // $this->question_id = '';
    }

    public function store()

    {

       $quizValidation =  $this->validate([
            'text' => 'required',
        ]);

        Question::create($quizValidation);

        session()->flash('message', 'Question Created Successfully.');

        $this->resetInputFields();

        $this->emit('quizStore');

    }

    public function edit($id)

    {
        $this->updateMode = true;

        $question = Question::where('id', $id)->first();

        $this->question_id = $id;

        $this->text = $question->text;

        // $this->openModal();

    }


    public function remove($id)

    {
        $this->updateMode = true;

        $question = Question::where('id', $id)->first();

        $this->question_id = $id;

        // $this->text = $question->text;

        // $this->openModal();

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }


    public function update()
    {
        $quizValidation = $this->validate([
            'text' => 'required',
        ]);

        if ($this->question_id) {
            $quiz = Question::find($this->question_id);
            $quiz->update([
                'text' => $this->text,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Question Updated Successfully.');
            $this->resetInputFields();

        }
    }


    public function delete()

    {
        if($this->question_id){
            Question::find($this->question_id)->delete();
            $this->updateMode = false;
            session()->flash('message', 'Question Deleted Successfully.');
        }


    }
}
