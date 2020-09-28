<?php namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $contacts, $firstname, $lastname, $selected_id;
    public $update_mode = false;

    public function render()
    {
        $this->contacts = Contact::all();
        return view('livewire.contact.component');
    }

    /**
     * Vide les champs du formulaire.
     * @author Lucas ROBIN
     */
    public function resetInput() :void
    {
        $this->firstname = null;
        $this->lastname = null;
    }

    /**
     * Permet de modifier un contact existant.
     * @var int $id - Id du contact
     * @author Lucas ROBIN
     */
    public function edit(int $id) :void
    {
        $record = Contact::findOrFail();

        $this->selected_id = $id;
        $this->firstname = $record->firstname;
        $this->lastname = $record->lastname;
        $this->phone = $record->phone;

        $this->update_mode = true;
    }

    /**
     *
     */
    public function update()
    {

    }

    /**
     *
     */
    public function store()
    {

    }

    /**
     *
     */
    public function destroy()
    {

    }

}
