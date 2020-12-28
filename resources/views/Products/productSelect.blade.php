<h4>SELECTION</h4>

    <div class="mb-5">

        <select class="btn btn-light btn-block">
            <option value="allBrands">Choisir une marque</option>
            @foreach ($brands as $b)
                <option value="{{ $b->getBrandId() }}">{{ $b->getBrandName() }}</option>
            @endforeach
        </select>

        <select class="btn btn-light btn-block">
            <option value="allCategories">Choisir une catégorie</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->getCategoryId() }}">{{ $cat->getCategoryName() }}</option>
            @endforeach
        </select>

        <select class="btn btn-light btn-block">
            <option value="allYears">Choisir une année</option>
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



