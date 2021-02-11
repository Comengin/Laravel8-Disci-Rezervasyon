<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
            @endif

            <form  id="form-wrap" wire:submit.prevent="store">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" wire:model="subject" placeholder="Subject">
                        @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="message">Your Message</label>
                        <textarea  wire:model="review" cols="5" rows="2" class="form-control" placeholder="Your Message"></textarea>
                        @error('review') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
            <!--<div class="row form-group">
                    <div class="col-md-12">
                        <label for="message">Your Message</label>
                        <input type="radio" value="5"  wire:model="rate" cols="10" rows="5" class="form-control" placeholder="Your Message"><label for="star5"></label>
                        @error('review') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>-->
                @auth
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-outline btn-lg" value="Save">
                        </div>
                    </div>
                @else
                    <a href="/login" class="btn btn-primary btn-outline btn-lg">For submit your review Login</a>
                @endauth

            </form>
        </div>
</div>
