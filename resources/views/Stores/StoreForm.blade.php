<h4>Nouveau magasin</h4>
<form method="POST" action="{{-- route('register') --}}">
    @csrf

    <div class="form-marque">
        <input   type="text" class="form-control @error('store_name')is-invalid @enderror" name="store_name" value="{{ old('store_name') }}" requiredautocomplete="store_name" autofocus placeholder="{{ __('Nom') }}">
        @error('store_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><br>

    <div class="form-marque">
        <input   type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street" placeholder="{{ __('Adresse') }}">

        @error('street')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><br>

    <div class="form-marque">
        <input   type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" required autocomplete="zip_code" placeholder="{{ __('Code postal') }}">

        @error('zip_code')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><br>

    <div class="form-marque">
        <input   type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="{{ __('Ville') }}">

        @error('city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><br>

    <div class="form-marque">
        <input   type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state" placeholder="{{ __('Région') }}">

        @error('state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><br>

    <div class="form-marque">
        <input   type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="{{ __('Téléphone') }}">

        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><br>

    <div class="form-marque">
        <input   type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email') }}">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><br>


    <div class="form-marque">
        <a class="btn btn-primary btn-user btn-block" href="{{ __('')  }}">Ajouter</a>
    </div>

</form>
