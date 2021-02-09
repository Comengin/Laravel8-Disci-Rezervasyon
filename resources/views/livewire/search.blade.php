<div>
    <!-- <input wire:model="search" name="search" type="text" class="input search-input" list="mylist" placeholder="Ne Aramak İstediniz ?"/>-->
    <input wire:model="search"  name="search" type="text" class="form-control" list="mylist" id="search"  placeholder="Ne Aramak İstersiniz ?">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
