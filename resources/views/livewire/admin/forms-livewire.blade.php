<div style="padding: 1% 5%">
    <div class="form-group mb-3 ">
        <label for="">Multiple Tags</label>
        <select class="form-control" wire:model="field">
            <option value="">Choose..</option>
            <option value="text">Text</option>
            <option value="textarea">Textarea</option>
            <option value="button">Button</option>
            <option value="radio">Radio Button</option>
            <option value="date">Date picker</option>
            <option value="select">Select</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="">Display Name</label>
        <input class="form-control" type="text" wire:model="disName" id="">
    </div>
    <button wire:click="add" type="button">submit</button>


    <form>
        @foreach ($type as $key => $value)
            <div class="row mt-2">
                <div class="col-md-10">
                    {{-- @dd($value) --}}
                    @if ($value['0'] == 'button')
                        <button wire:click.prevent="store()" type="button"
                            class="btn btn-success">{{ $value['1'] }}</button>
                    @elseif($value['0'] == 'textarea')
                        <label for="">{{ $value['1'] }}</label>
                        <textarea class="form-control" wire:model.defer="{{ $value['1'] }}"></textarea>
                        @error($value['1'])
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @elseif($value['0'] == 'text')
                        <label for="">{{ $value['1'] }}</label>
                        <input type="text" class="form-control" wire:model.defer="{{ $value['1'] }}" cols="30"
                            rows="10">
                        @error($value['1'])
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @elseif($value['0'] == 'date')
                        <label for="">{{ $value['1'] }}</label>
                        <input type="date" class="form-control" wire:model.defer="{{ $value['1'] }}" cols="30"
                            rows="10">
                        @error($value['1'])
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @elseif($value['0'] == 'radio')
                        <label for="">{{ $value['1'] }}</label>
                        <input type="radio" class="form-control" wire:model.defer="{{ $value['1'] }}">

                        @error($value['1'])
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @elseif($value['0'] == 'select')
                        <label for="">{{ $value['1'] }}</label>
                        <select type="text" class="form-control" wire:model.defer="{{ $value['1'] }}">
                            <option value="">select...</option>
                        </select>
                        @error($value['1'])
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @endif
                </div>
                <div class="col-md-2">
                    <button type="button" wire:click="remove('{{ $key }}')" class="btn btn-danger"
                        style="margin-top: 32px;">remove</button>
                </div>
            </div>
        @endforeach
    </form>



</div>
