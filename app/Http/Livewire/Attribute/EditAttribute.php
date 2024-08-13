<?php

namespace App\Http\Livewire\Attribute;

use App\Models\Attribute;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;


class EditAttribute extends Component
{
    public Attribute $attribute;

    public $label;

    public $productId;

    protected $rules = [
        'attribute.name' => 'required|string|max:255',
    ];

    public function mount(Attribute $attribute)
    {
        $this->attribute = $attribute;
        $this->productId = $attribute->product_id;
    }

    public function update()
    {
        $this->validate();

        $this->attribute->slug = Str::slug($this->attribute->name);
        $this->attribute->product()->associate($this->productId);
        $this->attribute->save();

        $this->emit('renderListAttributess');
        $this->dispatchBrowserEvent('notification', [
            'title' => "$this->label Actualizado",
            'subtitle' => "$this->label <b>" . $this->attribute->name . '</b> fue actualizado correctamente',
        ]);

        // Opcionalmente puedes redirigir o cerrar un modal, dependiendo de cómo manejes la UI
    }

    public function render()
    {
        return view('livewire.attribute.edit-attribute');
    }
}
