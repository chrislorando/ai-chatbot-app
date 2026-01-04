<?php

namespace App\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class ChatBot extends Component
{
    public $prompt = '';   
    public $answer = '';  
    public $messages = [];

    public function submitPrompt()
    {
        if (empty($this->prompt)) return;

        $this->messages[] = [
            'role' => 'user', 
            'content' => $this->prompt
        ];
        $this->answer = ''; 
        $this->prompt = ''; 

        $this->js('$wire.ask()');
    }

    public function ask()
    {
        $stream = OpenAI::chat()->createStreamed([
            'model' => 'gpt-4o-mini',
            'messages' => $this->messages,
        ]);

        $fullResponse = '';

        foreach ($stream as $response) {
            $text = $response->choices[0]->delta->content ?? '';
            $this->stream(to: 'answer', content: $text);
            $fullResponse .= $text;
        }

        $this->messages[] = [
            'role' => 'assistant', 
            'content' => $fullResponse
        ];
        
        $this->answer = '';
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
