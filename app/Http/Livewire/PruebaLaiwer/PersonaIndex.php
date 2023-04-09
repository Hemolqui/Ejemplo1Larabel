<?php
namespace App\Http\Livewire\PruebaLaiwer;
use Livewire\Component;

use App\Models\Persona; //esto importa la clase persona 
class PersonaIndex extends Component
{
    
    public function delete(Persona $persona): void
    {
        $persona->delete();    
    }
    public function render()
    {
        
        $personas = Persona::orderBy('nombre','DESC')->paginate(3); // hacemos una consulta
        return view('livewire.prueba-laiwer.persona-index', ['personas'=>$personas]); // mandados la variable ala vista
    }
}
