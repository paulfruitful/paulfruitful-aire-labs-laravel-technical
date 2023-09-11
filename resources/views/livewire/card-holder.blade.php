<div>
    <div  id="card-holder">
                
        @foreach ($data as $card)
      
        <livewire:card :card="$card"/>

        @endforeach
@livewireScripts
</div>
</div>
