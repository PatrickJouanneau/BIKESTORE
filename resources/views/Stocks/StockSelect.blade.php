<h4>SELECTION</h4>

    <div class="mb-5">

        <select class="btn btn-light btn-block">
            <option value="allBrands">Tous les magasins</option>
            @foreach ($stores as $mag)
                <option value="{{ $mag->getStoreId() }}">{{ $mag->getStoreName() }}</option>
            @endforeach
        </select>

        <select class="btn btn-light btn-block">
            <option value="allYears">Toutes les années</option>
            <option value="year">2016</option>
            <option value="year">2017</option>
            <option value="year">2018</option>
            <option value="year">2019</option>
            <option value="year">2020</option>
            <option value="year">2021</option>
            <option value="year">2022</option>
            <option value="year">2023</option>
        </select>

    </div>
