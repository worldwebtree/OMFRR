@extends('dashboard.master')

@section('title', 'Post Restaurant')

@push('css')

<style>
    .image-slider-btn:first-child img {
        transition: .2s;
    }
    .image-slider-btn:first-child img:hover {
        transform: scale(1.1);
    }
</style>

@endpush

@section('content')
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-capitalize">
                            <div class="card-title mb-5">
                                <h1>
                                    Post Restaurant <i class="fa fa-home" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <form action="{{ route('restaurant.management.store') }}" class="post_restaurant_form"
                                enctype="multipart/form-data"
                                method="POST">
                                <x-error/>
                                <x-alert/>
                                @csrf

                                <div class="form-group">
                                    <label for="RestaurantName">restaurant name</label>
                                    <input type="text" name="restaurant_name" id="RestaurantName" class="form-control" required placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantImages">restaurant images</label>
                                    <div class="custom-file">
                                        <input type="file"
                                                onchange="getFileName(this)"
                                                required
                                                multiple
                                                name="restaurant_images[]"
                                                id="RestaurantImages"
                                                class="custom-file-input"
                                                accept="images/png,jpg"
                                                id="customInput">
                                        <label class="custom-file-label fileInputLabel" id="" for="customInput">Choose file...</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantDescription">restaurant description</label>
                                    <textarea name="restaurant_description" id="RestaurantDescription" cols="30" rows="10" class="form-control editor">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sit fugit natus at non ab quia quis repellat possimus, saepe nulla voluptatem deleniti quasi? Eaque aliquam ut minus maiores laudantium quibusdam officia ipsum, natus odio, reprehenderit consequuntur odit accusantium libero vel exercitationem aut nobis ea necessitatibus, commodi ipsa. Modi earum tempora, tempore, distinctio nobis eius ut dolorum voluptatum debitis nemo facilis dolorem quos ducimus amet labore ea autem officia temporibus nostrum minima vero quam vel. Magnam natus ipsam ut unde eius consequuntur fugit quam non quisquam! A nam optio aliquam explicabo officia ab soluta! Sint doloribus nesciunt reiciendis perferendis voluptas magni iusto animi fuga tenetur id quia earum ullam rerum quibusdam, dolores dolorum. Minus quisquam odio reprehenderit sequi dolor similique hic id, eius iste incidunt distinctio suscipit itaque, quas voluptas delectus ab ducimus magni exercitationem soluta! Maiores deserunt error, assumenda, laudantium minus nisi quidem maxime dolores esse sapiente sequi unde laborum ex suscipit nesciunt amet voluptas modi? Iure voluptates mollitia inventore enim sit molestias quasi iste. Cumque iste iusto molestias. Repellat ea in nam tempore assumenda ad, nemo dolore temporibus nisi culpa a laudantium esse architecto rerum possimus expedita maiores corrupti, atque, eos provident officiis illum. Vero sit omnis ratione. Soluta voluptatibus eius delectus, eligendi blanditiis ducimus, corporis est asperiores distinctio necessitatibus itaque veniam inventore maiores eaque omnis, minus aspernatur a accusamus illum aut maxime repudiandae! Illum repudiandae qui impedit commodi corporis laborum mollitia, eius incidunt! Commodi voluptatibus aut blanditiis doloremque tenetur magni hic, quae officia voluptate consectetur minus cumque provident placeat laudantium dolorem accusamus deserunt quis ad. Provident laborum incidunt, dicta voluptatum dolorum illum cupiditate, earum est repellendus, accusantium repellat quas! Cumque animi officiis voluptates distinctio eligendi deserunt ea? Ullam ea nostrum itaque sunt magnam ab animi quisquam adipisci tempora nam? Quos totam aperiam doloremque cupiditate vel, laboriosam non pariatur impedit aspernatur est natus nihil modi tempore velit maiores ipsa placeat. Omnis perspiciatis sint aut maiores, enim voluptate at aliquam, atque delectus, aperiam error id excepturi ducimus magnam! Nam molestiae dolor, commodi aliquid doloremque consectetur at! Eveniet natus animi possimus aspernatur porro sunt doloremque ducimus veritatis. Eum, dignissimos harum doloremque labore similique repellat voluptatem voluptate. Fugiat perferendis ut, dignissimos minus perspiciatis quidem distinctio ea tenetur sed, voluptatum ullam esse veniam iste mollitia quos quasi aspernatur vero architecto numquam. Omnis ullam esse odit, aspernatur maxime dolore suscipit repellat enim illo incidunt aperiam perferendis aut dignissimos culpa accusamus? Non odio voluptas repellendus, sequi iure dolorum blanditiis, cupiditate esse alias reiciendis, assumenda similique magni exercitationem iste ipsam ullam rerum eveniet asperiores accusantium quasi? Tenetur, dolores ut impedit ullam corporis, maxime, sint provident architecto eligendi quidem iure labore nemo quo consequatur saepe vero modi ex beatae nisi recusandae. Dolore odio fugit harum dicta, accusamus cum sunt exercitationem ut incidunt? Pariatur voluptate dolore omnis est sunt accusantium, distinctio corporis magnam fuga tempore perspiciatis recusandae dolorem, optio eaque accusamus debitis, libero explicabo consequuntur obcaecati deserunt quaerat nobis! Magnam aspernatur dolor debitis ipsa neque quae est numquam! Eveniet unde iure deleniti sequi voluptas incidunt aliquam impedit.
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantCity">restaurant city</label>
                                    <select class="form-control" name="restaurant_city" required id="RestaurantCity">
                                        <option selected disabled>Select City</option>
                                        <option value="Islamabad">Islamabad</option>
                                        <option value="" disabled>Punjab Cities</option>
                                        <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                        <option value="Ahmadpur East">Ahmadpur East</option>
                                        <option value="Ali Khan Abad">Ali Khan Abad</option>
                                        <option value="Alipur">Alipur</option>
                                        <option value="Arifwala">Arifwala</option>
                                        <option value="Attock">Attock</option>
                                        <option value="Bhera">Bhera</option>
                                        <option value="Bhalwal">Bhalwal</option>
                                        <option value="Bahawalnagar">Bahawalnagar</option>
                                        <option value="Bahawalpur">Bahawalpur</option>
                                        <option value="Bhakkar">Bhakkar</option>
                                        <option value="Burewala">Burewala</option>
                                        <option value="Chillianwala">Chillianwala</option>
                                        <option value="Chakwal">Chakwal</option>
                                        <option value="Chichawatni">Chichawatni</option>
                                        <option value="Chiniot">Chiniot</option>
                                        <option value="Chishtian">Chishtian</option>
                                        <option value="Daska">Daska</option>
                                        <option value="Darya Khan">Darya Khan</option>
                                        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                        <option value="Dhaular">Dhaular</option>
                                        <option value="Dina">Dina</option>
                                        <option value="Dinga">Dinga</option>
                                        <option value="Dipalpur">Dipalpur</option>
                                        <option value="Faisalabad">Faisalabad</option>
                                        <option value="Ferozewala">Ferozewala</option>
                                        <option value="Fateh Jhang">Fateh Jang</option>
                                        <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                        <option value="Gojra">Gojra</option>
                                        <option value="Gujranwala">Gujranwala</option>
                                        <option value="Gujrat">Gujrat</option>
                                        <option value="Gujar Khan">Gujar Khan</option>
                                        <option value="Hafizabad">Hafizabad</option>
                                        <option value="Haroonabad">Haroonabad</option>
                                        <option value="Hasilpur">Hasilpur</option>
                                        <option value="Haveli Lakha">Haveli Lakha</option>
                                        <option value="Jatoi">Jatoi</option>
                                        <option value="Jalalpur">Jalalpur</option>
                                        <option value="Jattan">Jattan</option>
                                        <option value="Jampur">Jampur</option>
                                        <option value="Jaranwala">Jaranwala</option>
                                        <option value="Jhang">Jhang</option>
                                        <option value="Jhelum">Jhelum</option>
                                        <option value="Kalabagh">Kalabagh</option>
                                        <option value="Karor Lal Esan">Karor Lal Esan</option>
                                        <option value="Kasur">Kasur</option>
                                        <option value="Kamalia">Kamalia</option>
                                        <option value="Kamoke">Kamoke</option>
                                        <option value="Khanewal">Khanewal</option>
                                        <option value="Khanpur">Khanpur</option>
                                        <option value="Kharian">Kharian</option>
                                        <option value="Khushab">Khushab</option>
                                        <option value="Kot Addu">Kot Addu</option>
                                        <option value="Jauharabad">Jauharabad</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Lalamusa">Lalamusa</option>
                                        <option value="Layyah">Layyah</option>
                                        <option value="Liaquat Pur">Liaquat Pur</option>
                                        <option value="Lodhran">Lodhran</option>
                                        <option value="Malakwal">Malakwal</option>
                                        <option value="Mamoori">Mamoori</option>
                                        <option value="Mailsi">Mailsi</option>
                                        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                        <option value="Mian Channu">Mian Channu</option>
                                        <option value="Mianwali">Mianwali</option>
                                        <option value="Multan">Multan</option>
                                        <option value="Murree">Murree</option>
                                        <option value="Muridke">Muridke</option>
                                        <option value="Mianwali Bangla">Mianwali Bangla</option>
                                        <option value="Muzaffargarh">Muzaffargarh</option>
                                        <option value="Narowal">Narowal</option>
                                        <option value="Nankana Sahib">Nankana Sahib</option>
                                        <option value="Okara">Okara</option>
                                        <option value="Renala Khurd">Renala Khurd</option>
                                        <option value="Pakpattan">Pakpattan</option>
                                        <option value="Pattoki">Pattoki</option>
                                        <option value="Pir Mahal">Pir Mahal</option>
                                        <option value="Qaimpur">Qaimpur</option>
                                        <option value="Qila Didar Singh">Qila Didar Singh</option>
                                        <option value="Rabwah">Rabwah</option>
                                        <option value="Raiwind">Raiwind</option>
                                        <option value="Rajanpur">Rajanpur</option>
                                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                        <option value="Rawalpindi">Rawalpindi</option>
                                        <option value="Sadiqabad">Sadiqabad</option>
                                        <option value="Safdarabad">Safdarabad</option>
                                        <option value="Sahiwal">Sahiwal</option>
                                        <option value="Sangla Hill">Sangla Hill</option>
                                        <option value="Sarai Alamgir">Sarai Alamgir</option>
                                        <option value="Sargodha">Sargodha</option>
                                        <option value="Shakargarh">Shakargarh</option>
                                        <option value="Sheikhupura">Sheikhupura</option>
                                        <option value="Sialkot">Sialkot</option>
                                        <option value="Sohawa">Sohawa</option>
                                        <option value="Soianwala">Soianwala</option>
                                        <option value="Siranwali">Siranwali</option>
                                        <option value="Talagang">Talagang</option>
                                        <option value="Taxila">Taxila</option>
                                        <option value="Toba Tek Singh">Toba Tek Singh</option>
                                        <option value="Vehari">Vehari</option>
                                        <option value="Wah Cantonment">Wah Cantonment</option>
                                        <option value="Wazirabad">Wazirabad</option>
                                        <option value="" disabled>Sindh Cities</option>
                                        <option value="Badin">Badin</option>
                                        <option value="Bhirkan">Bhirkan</option>
                                        <option value="Rajo Khanani">Rajo Khanani</option>
                                        <option value="Chak">Chak</option>
                                        <option value="Dadu">Dadu</option>
                                        <option value="Digri">Digri</option>
                                        <option value="Diplo">Diplo</option>
                                        <option value="Dokri">Dokri</option>
                                        <option value="Ghotki">Ghotki</option>
                                        <option value="Haala">Haala</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Islamkot">Islamkot</option>
                                        <option value="Jacobabad">Jacobabad</option>
                                        <option value="Jamshoro">Jamshoro</option>
                                        <option value="Jungshahi">Jungshahi</option>
                                        <option value="Kandhkot">Kandhkot</option>
                                        <option value="Kandiaro">Kandiaro</option>
                                        <option value="Karachi">Karachi</option>
                                        <option value="Kashmore">Kashmore</option>
                                        <option value="Keti Bandar">Keti Bandar</option>
                                        <option value="Khairpur">Khairpur</option>
                                        <option value="Kotri">Kotri</option>
                                        <option value="Larkana">Larkana</option>
                                        <option value="Matiari">Matiari</option>
                                        <option value="Mehar">Mehar</option>
                                        <option value="Mirpur Khas">Mirpur Khas</option>
                                        <option value="Mithani">Mithani</option>
                                        <option value="Mithi">Mithi</option>
                                        <option value="Mehrabpur">Mehrabpur</option>
                                        <option value="Moro">Moro</option>
                                        <option value="Nagarparkar">Nagarparkar</option>
                                        <option value="Naudero">Naudero</option>
                                        <option value="Naushahro Feroze">Naushahro Feroze</option>
                                        <option value="Naushara">Naushara</option>
                                        <option value="Nawabshah">Nawabshah</option>
                                        <option value="Nazimabad">Nazimabad</option>
                                        <option value="Qambar">Qambar</option>
                                        <option value="Qasimabad">Qasimabad</option>
                                        <option value="Ranipur">Ranipur</option>
                                        <option value="Ratodero">Ratodero</option>
                                        <option value="Rohri">Rohri</option>
                                        <option value="Sakrand">Sakrand</option>
                                        <option value="Sanghar">Sanghar</option>
                                        <option value="Shahbandar">Shahbandar</option>
                                        <option value="Shahdadkot">Shahdadkot</option>
                                        <option value="Shahdadpur">Shahdadpur</option>
                                        <option value="Shahpur Chakar">Shahpur Chakar</option>
                                        <option value="Shikarpaur">Shikarpaur</option>
                                        <option value="Sukkur">Sukkur</option>
                                        <option value="Tangwani">Tangwani</option>
                                        <option value="Tando Adam Khan">Tando Adam Khan</option>
                                        <option value="Tando Allahyar">Tando Allahyar</option>
                                        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                        <option value="Thatta">Thatta</option>
                                        <option value="Umerkot">Umerkot</option>
                                        <option value="Warah">Warah</option>
                                        <option value="" disabled>Khyber Cities</option>
                                        <option value="Abbottabad">Abbottabad</option>
                                        <option value="Adezai">Adezai</option>
                                        <option value="Alpuri">Alpuri</option>
                                        <option value="Akora Khattak">Akora Khattak</option>
                                        <option value="Ayubia">Ayubia</option>
                                        <option value="Banda Daud Shah">Banda Daud Shah</option>
                                        <option value="Bannu">Bannu</option>
                                        <option value="Batkhela">Batkhela</option>
                                        <option value="Battagram">Battagram</option>
                                        <option value="Birote">Birote</option>
                                        <option value="Chakdara">Chakdara</option>
                                        <option value="Charsadda">Charsadda</option>
                                        <option value="Chitral">Chitral</option>
                                        <option value="Daggar">Daggar</option>
                                        <option value="Dargai">Dargai</option>
                                        <option value="Darya Khan">Darya Khan</option>
                                        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                        <option value="Doaba">Doaba</option>
                                        <option value="Dir">Dir</option>
                                        <option value="Drosh">Drosh</option>
                                        <option value="Hangu">Hangu</option>
                                        <option value="Haripur">Haripur</option>
                                        <option value="Karak">Karak</option>
                                        <option value="Kohat">Kohat</option>
                                        <option value="Kulachi">Kulachi</option>
                                        <option value="Lakki Marwat">Lakki Marwat</option>
                                        <option value="Latamber">Latamber</option>
                                        <option value="Madyan">Madyan</option>
                                        <option value="Mansehra">Mansehra</option>
                                        <option value="Mardan">Mardan</option>
                                        <option value="Mastuj">Mastuj</option>
                                        <option value="Mingora">Mingora</option>
                                        <option value="Nowshera">Nowshera</option>
                                        <option value="Paharpur">Paharpur</option>
                                        <option value="Pabbi">Pabbi</option>
                                        <option value="Peshawar">Peshawar</option>
                                        <option value="Saidu Sharif">Saidu Sharif</option>
                                        <option value="Shorkot">Shorkot</option>
                                        <option value="Shewa Adda">Shewa Adda</option>
                                        <option value="Swabi">Swabi</option>
                                        <option value="Swat">Swat</option>
                                        <option value="Tangi">Tangi</option>
                                        <option value="Tank">Tank</option>
                                        <option value="Thall">Thall</option>
                                        <option value="Timergara">Timergara</option>
                                        <option value="Tordher">Tordher</option>
                                        <option value="" disabled>Balochistan Cities</option>
                                        <option value="Awaran">Awaran</option>
                                        <option value="Barkhan">Barkhan</option>
                                        <option value="Chagai">Chagai</option>
                                        <option value="Dera Bugti">Dera Bugti</option>
                                        <option value="Gwadar">Gwadar</option>
                                        <option value="Harnai">Harnai</option>
                                        <option value="Jafarabad">Jafarabad</option>
                                        <option value="Jhal Magsi">Jhal Magsi</option>
                                        <option value="Kacchi">Kacchi</option>
                                        <option value="Kalat">Kalat</option>
                                        <option value="Kech">Kech</option>
                                        <option value="Kharan">Kharan</option>
                                        <option value="Khuzdar">Khuzdar</option>
                                        <option value="Killa Abdullah">Killa Abdullah</option>
                                        <option value="Killa Saifullah">Killa Saifullah</option>
                                        <option value="Kohlu">Kohlu</option>
                                        <option value="Lasbela">Lasbela</option>
                                        <option value="Lehri">Lehri</option>
                                        <option value="Loralai">Loralai</option>
                                        <option value="Mastung">Mastung</option>
                                        <option value="Musakhel">Musakhel</option>
                                        <option value="Nasirabad">Nasirabad</option>
                                        <option value="Nushki">Nushki</option>
                                        <option value="Panjgur">Panjgur</option>
                                        <option value="Pishin Valley">Pishin Valley</option>
                                        <option value="Quetta">Quetta</option>
                                        <option value="Sherani">Sherani</option>
                                        <option value="Sibi">Sibi</option>
                                        <option value="Sohbatpur">Sohbatpur</option>
                                        <option value="Washuk">Washuk</option>
                                        <option value="Zhob">Zhob</option>
                                        <option value="Ziarat">Ziarat</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantAddress">restaurant address</label>
                                    <input type="text" name="restaurant_address" id="RestaurantAddress" class="form-control" required placeholder="Enter address">
                                </div>

                                <div class="form-group">
                                    <label for="">Social Links</label>
                                    <div class="d-md-flex justify-content-around">
                                        <input type="url" name="restaurant_social_links[]" id="" class="form-control mx-1" placeholder="https://facebook.com/">
                                        <input type="url" name="restaurant_social_links[]" id="" class="form-control mx-1" placeholder="https://twitter.com/">
                                        <input type="url" name="restaurant_social_links[]" id="" class="form-control mx-1" placeholder="https://instagram.com/">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantCategory">restaurant category</label>
                                    <select class="form-control" name="restaurant_category" required id="RestaurantCategory">
                                        <option selected disabled>Select Category</option>
                                        <option value="Dine In">Dine In</option>
                                        <option value="Take Away">Take Away</option>
                                        <option value="Dine In & Take Away">Dine In & Take Away</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Availability</label>
                                    <div class="d-md-flex align-items-md-center">
                                        <label for="">From</label>
                                        <input type="time" class="form-control mx-2" name="restaurant_availability_from" id="RestaurantAvailabilityFrom">

                                        <label for="">To</label>
                                        <input type="time" class="form-control mx-2" name="restaurant_availability_to" id="RestaurantAvailabilityTo">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary w-100">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-capitalize">
                                restaurant's table <i class="fa fa-table" aria-hidden="true"></i>
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>restaurant title</th>
                                            <th>preview restaurant images</th>
                                            <th>restaurant decription</th>
                                            <th>city</th>
                                            <th>address</th>
                                            <th>social Links</th>
                                            <th>category</th>
                                            <th>Availability</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($restaurants as $restaurant)
                                            <tr>
                                                <td>{{ $restaurant->title }}</td>
                                                @foreach ($restaurant->post_restaurant_meta as $restaurant_meta)
                                                    @php($Image = json_decode($restaurant_meta->meta_value))

                                                    {{-- @if (is_array(json_decode($restaurant_meta->meta_value))) --}}
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn text-capitalize bg-light image-slider-btn" data-toggle="modal" data-target="#modelId">
                                                                <img width="70" height="70" src="{{ asset('storage/Restaurant/images/' . $Image[0]) }}" alt="First Image" srcset="">
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade text-capitalize" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div id="carouselId" class="carousel slide" data-ride="carousel">
                                                                                {{-- @php($count = 0)
                                                                                <ol class="carousel-indicators">
                                                                                    <li data-target="#carouselId" data-slide-to="{{ $count }}" class="active"></li>
                                                                                    @foreach ($Image as $key => $images)
                                                                                        @if ($key > 0)
                                                                                            <li data-target="#carouselId" data-slide-to="{{ $key }}"></li>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </ol> --}}

                                                                                <div class="carousel-inner" role="listbox">
                                                                                    {{-- <div class="carousel-item active">
                                                                                        <img class="w-100" height="350" src="{{ asset('storage/Restaurant/images/'. $Image[0]) }}" alt="First slide">
                                                                                    </div> --}}
                                                                                    @foreach (json_decode($restaurant_meta->meta_value) as $images)
                                                                                        <div class="carousel-item @if ($loop->first) active @endif">
                                                                                            <img class="w-100" height="350" src="{{ asset('storage/Restaurant/images/'. $images) }}" alt="restaurant_images" srcset="">
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                    <span class="sr-only text-dark">Previous</span>
                                                                                </a>
                                                                                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                    <span class="sr-only">Next</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    {{-- @endif --}}
                                                @endforeach
                                                <td class="restaurantDescriptionText">
                                                    {!! $restaurant->description ?? "No Description" !!}
                                                </td>
                                                <td>{{ $restaurant->city }}</td>
                                                <td>{{ $restaurant->address }}</td>
                                                <td style="width: 100px">
                                                    @foreach (json_decode($restaurant->social_links) as $icons => $links)
                                                        <a href="{{ $links }}" target="_blank" class="mx-1">
                                                            <i class="fab fa-{{ $icons }}"></i>
                                                        </a>
                                                    @endforeach
                                                </td>
                                                <td>{{ $restaurant->category }}</td>
                                                <td style="width: 200px">
                                                    @foreach (json_decode($restaurant->availability) as $availability => $time)
                                                        {{ $availability }}: {{ $time }}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="{{ route('restaurant.management.destroy', $restaurant->id) }}">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="editRestaurantDetailsBtn"
                                                        data-toggle="modal"
                                                        data-target="#editRestaurantModal"
                                                        data-restaurant-id="{{ $restaurant->id }}"
                                                        data-restaurant-title="{{ $restaurant->title }}"
                                                        data-restaurant-description="{{ $restaurant->description }}"
                                                        data-restaurant-city="{{ $restaurant->city }}"
                                                        data-restaurant-address="{{ $restaurant->address }}"
                                                        data-restaurant-social_links="{{ $restaurant->social_links }}"
                                                        data-restaurant-category="{{ $restaurant->category }}"
                                                        data-restaurant-availability="{{ $restaurant->availability }}"
                                                        href="#editUserBtn">
                                                        <i class="fa fa-edit text-primary" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editRestaurantModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Restaurant Details</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="edit_restaurant_form"
                                                            enctype="multipart/form-data"
                                                            method="POST">
                                                            @method('PUT')

                                                            <x-error/>
                                                            <x-alert/>
                                                            @csrf

                                                            <div class="form-group">
                                                                <label for="EditRestaurantName">restaurant name</label>
                                                                <input type="text" name="restaurant_name" id="EditRestaurantName" class="form-control" required placeholder="Enter name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="RestaurantImages">restaurant images</label>
                                                                <div class="custom-file">
                                                                    <input type="file"
                                                                            onchange="getFileName(this)"
                                                                            multiple
                                                                            name="restaurant_images[]"
                                                                            id="RestaurantImages"
                                                                            class="custom-file-input"
                                                                            accept="images/png,jpg"
                                                                            id="customInput">
                                                                    <label class="custom-file-label fileInputLabel" id="" for="customInput">Choose file...</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="EditRestaurantDescription">restaurant description</label>
                                                                <textarea name="restaurant_description" id="EditRestaurantDescription" cols="30" rows="10" class="form-control editor"></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="RestaurantCity">restaurant city</label>
                                                                <select class="form-control" name="restaurant_city" required id="RestaurantCity">
                                                                    <option selected id="EditRestaurantCity"></option>
                                                                    <option value="Islamabad">Islamabad</option>
                                                                    <option value="" disabled>Punjab Cities</option>
                                                                    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                                                    <option value="Ahmadpur East">Ahmadpur East</option>
                                                                    <option value="Ali Khan Abad">Ali Khan Abad</option>
                                                                    <option value="Alipur">Alipur</option>
                                                                    <option value="Arifwala">Arifwala</option>
                                                                    <option value="Attock">Attock</option>
                                                                    <option value="Bhera">Bhera</option>
                                                                    <option value="Bhalwal">Bhalwal</option>
                                                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                                                    <option value="Bahawalpur">Bahawalpur</option>
                                                                    <option value="Bhakkar">Bhakkar</option>
                                                                    <option value="Burewala">Burewala</option>
                                                                    <option value="Chillianwala">Chillianwala</option>
                                                                    <option value="Chakwal">Chakwal</option>
                                                                    <option value="Chichawatni">Chichawatni</option>
                                                                    <option value="Chiniot">Chiniot</option>
                                                                    <option value="Chishtian">Chishtian</option>
                                                                    <option value="Daska">Daska</option>
                                                                    <option value="Darya Khan">Darya Khan</option>
                                                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                                    <option value="Dhaular">Dhaular</option>
                                                                    <option value="Dina">Dina</option>
                                                                    <option value="Dinga">Dinga</option>
                                                                    <option value="Dipalpur">Dipalpur</option>
                                                                    <option value="Faisalabad">Faisalabad</option>
                                                                    <option value="Ferozewala">Ferozewala</option>
                                                                    <option value="Fateh Jhang">Fateh Jang</option>
                                                                    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                                                    <option value="Gojra">Gojra</option>
                                                                    <option value="Gujranwala">Gujranwala</option>
                                                                    <option value="Gujrat">Gujrat</option>
                                                                    <option value="Gujar Khan">Gujar Khan</option>
                                                                    <option value="Hafizabad">Hafizabad</option>
                                                                    <option value="Haroonabad">Haroonabad</option>
                                                                    <option value="Hasilpur">Hasilpur</option>
                                                                    <option value="Haveli Lakha">Haveli Lakha</option>
                                                                    <option value="Jatoi">Jatoi</option>
                                                                    <option value="Jalalpur">Jalalpur</option>
                                                                    <option value="Jattan">Jattan</option>
                                                                    <option value="Jampur">Jampur</option>
                                                                    <option value="Jaranwala">Jaranwala</option>
                                                                    <option value="Jhang">Jhang</option>
                                                                    <option value="Jhelum">Jhelum</option>
                                                                    <option value="Kalabagh">Kalabagh</option>
                                                                    <option value="Karor Lal Esan">Karor Lal Esan</option>
                                                                    <option value="Kasur">Kasur</option>
                                                                    <option value="Kamalia">Kamalia</option>
                                                                    <option value="Kamoke">Kamoke</option>
                                                                    <option value="Khanewal">Khanewal</option>
                                                                    <option value="Khanpur">Khanpur</option>
                                                                    <option value="Kharian">Kharian</option>
                                                                    <option value="Khushab">Khushab</option>
                                                                    <option value="Kot Addu">Kot Addu</option>
                                                                    <option value="Jauharabad">Jauharabad</option>
                                                                    <option value="Lahore">Lahore</option>
                                                                    <option value="Lalamusa">Lalamusa</option>
                                                                    <option value="Layyah">Layyah</option>
                                                                    <option value="Liaquat Pur">Liaquat Pur</option>
                                                                    <option value="Lodhran">Lodhran</option>
                                                                    <option value="Malakwal">Malakwal</option>
                                                                    <option value="Mamoori">Mamoori</option>
                                                                    <option value="Mailsi">Mailsi</option>
                                                                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                                    <option value="Mian Channu">Mian Channu</option>
                                                                    <option value="Mianwali">Mianwali</option>
                                                                    <option value="Multan">Multan</option>
                                                                    <option value="Murree">Murree</option>
                                                                    <option value="Muridke">Muridke</option>
                                                                    <option value="Mianwali Bangla">Mianwali Bangla</option>
                                                                    <option value="Muzaffargarh">Muzaffargarh</option>
                                                                    <option value="Narowal">Narowal</option>
                                                                    <option value="Nankana Sahib">Nankana Sahib</option>
                                                                    <option value="Okara">Okara</option>
                                                                    <option value="Renala Khurd">Renala Khurd</option>
                                                                    <option value="Pakpattan">Pakpattan</option>
                                                                    <option value="Pattoki">Pattoki</option>
                                                                    <option value="Pir Mahal">Pir Mahal</option>
                                                                    <option value="Qaimpur">Qaimpur</option>
                                                                    <option value="Qila Didar Singh">Qila Didar Singh</option>
                                                                    <option value="Rabwah">Rabwah</option>
                                                                    <option value="Raiwind">Raiwind</option>
                                                                    <option value="Rajanpur">Rajanpur</option>
                                                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                                    <option value="Rawalpindi">Rawalpindi</option>
                                                                    <option value="Sadiqabad">Sadiqabad</option>
                                                                    <option value="Safdarabad">Safdarabad</option>
                                                                    <option value="Sahiwal">Sahiwal</option>
                                                                    <option value="Sangla Hill">Sangla Hill</option>
                                                                    <option value="Sarai Alamgir">Sarai Alamgir</option>
                                                                    <option value="Sargodha">Sargodha</option>
                                                                    <option value="Shakargarh">Shakargarh</option>
                                                                    <option value="Sheikhupura">Sheikhupura</option>
                                                                    <option value="Sialkot">Sialkot</option>
                                                                    <option value="Sohawa">Sohawa</option>
                                                                    <option value="Soianwala">Soianwala</option>
                                                                    <option value="Siranwali">Siranwali</option>
                                                                    <option value="Talagang">Talagang</option>
                                                                    <option value="Taxila">Taxila</option>
                                                                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                                                                    <option value="Vehari">Vehari</option>
                                                                    <option value="Wah Cantonment">Wah Cantonment</option>
                                                                    <option value="Wazirabad">Wazirabad</option>
                                                                    <option value="" disabled>Sindh Cities</option>
                                                                    <option value="Badin">Badin</option>
                                                                    <option value="Bhirkan">Bhirkan</option>
                                                                    <option value="Rajo Khanani">Rajo Khanani</option>
                                                                    <option value="Chak">Chak</option>
                                                                    <option value="Dadu">Dadu</option>
                                                                    <option value="Digri">Digri</option>
                                                                    <option value="Diplo">Diplo</option>
                                                                    <option value="Dokri">Dokri</option>
                                                                    <option value="Ghotki">Ghotki</option>
                                                                    <option value="Haala">Haala</option>
                                                                    <option value="Hyderabad">Hyderabad</option>
                                                                    <option value="Islamkot">Islamkot</option>
                                                                    <option value="Jacobabad">Jacobabad</option>
                                                                    <option value="Jamshoro">Jamshoro</option>
                                                                    <option value="Jungshahi">Jungshahi</option>
                                                                    <option value="Kandhkot">Kandhkot</option>
                                                                    <option value="Kandiaro">Kandiaro</option>
                                                                    <option value="Karachi">Karachi</option>
                                                                    <option value="Kashmore">Kashmore</option>
                                                                    <option value="Keti Bandar">Keti Bandar</option>
                                                                    <option value="Khairpur">Khairpur</option>
                                                                    <option value="Kotri">Kotri</option>
                                                                    <option value="Larkana">Larkana</option>
                                                                    <option value="Matiari">Matiari</option>
                                                                    <option value="Mehar">Mehar</option>
                                                                    <option value="Mirpur Khas">Mirpur Khas</option>
                                                                    <option value="Mithani">Mithani</option>
                                                                    <option value="Mithi">Mithi</option>
                                                                    <option value="Mehrabpur">Mehrabpur</option>
                                                                    <option value="Moro">Moro</option>
                                                                    <option value="Nagarparkar">Nagarparkar</option>
                                                                    <option value="Naudero">Naudero</option>
                                                                    <option value="Naushahro Feroze">Naushahro Feroze</option>
                                                                    <option value="Naushara">Naushara</option>
                                                                    <option value="Nawabshah">Nawabshah</option>
                                                                    <option value="Nazimabad">Nazimabad</option>
                                                                    <option value="Qambar">Qambar</option>
                                                                    <option value="Qasimabad">Qasimabad</option>
                                                                    <option value="Ranipur">Ranipur</option>
                                                                    <option value="Ratodero">Ratodero</option>
                                                                    <option value="Rohri">Rohri</option>
                                                                    <option value="Sakrand">Sakrand</option>
                                                                    <option value="Sanghar">Sanghar</option>
                                                                    <option value="Shahbandar">Shahbandar</option>
                                                                    <option value="Shahdadkot">Shahdadkot</option>
                                                                    <option value="Shahdadpur">Shahdadpur</option>
                                                                    <option value="Shahpur Chakar">Shahpur Chakar</option>
                                                                    <option value="Shikarpaur">Shikarpaur</option>
                                                                    <option value="Sukkur">Sukkur</option>
                                                                    <option value="Tangwani">Tangwani</option>
                                                                    <option value="Tando Adam Khan">Tando Adam Khan</option>
                                                                    <option value="Tando Allahyar">Tando Allahyar</option>
                                                                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                                                    <option value="Thatta">Thatta</option>
                                                                    <option value="Umerkot">Umerkot</option>
                                                                    <option value="Warah">Warah</option>
                                                                    <option value="" disabled>Khyber Cities</option>
                                                                    <option value="Abbottabad">Abbottabad</option>
                                                                    <option value="Adezai">Adezai</option>
                                                                    <option value="Alpuri">Alpuri</option>
                                                                    <option value="Akora Khattak">Akora Khattak</option>
                                                                    <option value="Ayubia">Ayubia</option>
                                                                    <option value="Banda Daud Shah">Banda Daud Shah</option>
                                                                    <option value="Bannu">Bannu</option>
                                                                    <option value="Batkhela">Batkhela</option>
                                                                    <option value="Battagram">Battagram</option>
                                                                    <option value="Birote">Birote</option>
                                                                    <option value="Chakdara">Chakdara</option>
                                                                    <option value="Charsadda">Charsadda</option>
                                                                    <option value="Chitral">Chitral</option>
                                                                    <option value="Daggar">Daggar</option>
                                                                    <option value="Dargai">Dargai</option>
                                                                    <option value="Darya Khan">Darya Khan</option>
                                                                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                                    <option value="Doaba">Doaba</option>
                                                                    <option value="Dir">Dir</option>
                                                                    <option value="Drosh">Drosh</option>
                                                                    <option value="Hangu">Hangu</option>
                                                                    <option value="Haripur">Haripur</option>
                                                                    <option value="Karak">Karak</option>
                                                                    <option value="Kohat">Kohat</option>
                                                                    <option value="Kulachi">Kulachi</option>
                                                                    <option value="Lakki Marwat">Lakki Marwat</option>
                                                                    <option value="Latamber">Latamber</option>
                                                                    <option value="Madyan">Madyan</option>
                                                                    <option value="Mansehra">Mansehra</option>
                                                                    <option value="Mardan">Mardan</option>
                                                                    <option value="Mastuj">Mastuj</option>
                                                                    <option value="Mingora">Mingora</option>
                                                                    <option value="Nowshera">Nowshera</option>
                                                                    <option value="Paharpur">Paharpur</option>
                                                                    <option value="Pabbi">Pabbi</option>
                                                                    <option value="Peshawar">Peshawar</option>
                                                                    <option value="Saidu Sharif">Saidu Sharif</option>
                                                                    <option value="Shorkot">Shorkot</option>
                                                                    <option value="Shewa Adda">Shewa Adda</option>
                                                                    <option value="Swabi">Swabi</option>
                                                                    <option value="Swat">Swat</option>
                                                                    <option value="Tangi">Tangi</option>
                                                                    <option value="Tank">Tank</option>
                                                                    <option value="Thall">Thall</option>
                                                                    <option value="Timergara">Timergara</option>
                                                                    <option value="Tordher">Tordher</option>
                                                                    <option value="" disabled>Balochistan Cities</option>
                                                                    <option value="Awaran">Awaran</option>
                                                                    <option value="Barkhan">Barkhan</option>
                                                                    <option value="Chagai">Chagai</option>
                                                                    <option value="Dera Bugti">Dera Bugti</option>
                                                                    <option value="Gwadar">Gwadar</option>
                                                                    <option value="Harnai">Harnai</option>
                                                                    <option value="Jafarabad">Jafarabad</option>
                                                                    <option value="Jhal Magsi">Jhal Magsi</option>
                                                                    <option value="Kacchi">Kacchi</option>
                                                                    <option value="Kalat">Kalat</option>
                                                                    <option value="Kech">Kech</option>
                                                                    <option value="Kharan">Kharan</option>
                                                                    <option value="Khuzdar">Khuzdar</option>
                                                                    <option value="Killa Abdullah">Killa Abdullah</option>
                                                                    <option value="Killa Saifullah">Killa Saifullah</option>
                                                                    <option value="Kohlu">Kohlu</option>
                                                                    <option value="Lasbela">Lasbela</option>
                                                                    <option value="Lehri">Lehri</option>
                                                                    <option value="Loralai">Loralai</option>
                                                                    <option value="Mastung">Mastung</option>
                                                                    <option value="Musakhel">Musakhel</option>
                                                                    <option value="Nasirabad">Nasirabad</option>
                                                                    <option value="Nushki">Nushki</option>
                                                                    <option value="Panjgur">Panjgur</option>
                                                                    <option value="Pishin Valley">Pishin Valley</option>
                                                                    <option value="Quetta">Quetta</option>
                                                                    <option value="Sherani">Sherani</option>
                                                                    <option value="Sibi">Sibi</option>
                                                                    <option value="Sohbatpur">Sohbatpur</option>
                                                                    <option value="Washuk">Washuk</option>
                                                                    <option value="Zhob">Zhob</option>
                                                                    <option value="Ziarat">Ziarat</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="EditRestaurantAddress">restaurant address</label>
                                                                <input type="text" name="restaurant_address" id="EditRestaurantAddress" class="form-control" required placeholder="Enter address">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Social Links</label>
                                                                <div class="d-md-flex justify-content-around">
                                                                    <input type="url" name="restaurant_social_links[]" id="" class="form-control mx-1 embed_facebook_link" placeholder="https://facebook.com/">
                                                                    <input type="url" name="restaurant_social_links[]" id="" class="form-control mx-1 embed_twitter_link" placeholder="https://twitter.com/">
                                                                    <input type="url" name="restaurant_social_links[]" id="" class="form-control mx-1 embed_instagram_link" placeholder="https://instagram.com/">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="RestaurantCategory">restaurant category</label>
                                                                <select class="form-control" name="restaurant_category" required id="RestaurantCategory">
                                                                    <option selected id="EditRestaurantCategory"></option>
                                                                    <option value="Dine In">Dine In</option>
                                                                    <option value="Take Away">Take Away</option>
                                                                    <option value="Dine In & Take Away">Dine In & Take Away</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Availability</label>
                                                                <div class="d-md-flex align-items-md-center">
                                                                    <label for="EditRestaurantAvailabilityFrom">From</label>
                                                                    <input type="time" class="form-control mx-2 availability_from" name="restaurant_availability_from" id="EditRestaurantAvailabilityFrom">

                                                                    <label for="EditRestaurantAvailabilityTo">To</label>
                                                                    <input type="time" class="form-control mx-2 availability_to" name="restaurant_availability_to" id="EditRestaurantAvailabilityTo">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary w-100">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </table>
                                {{ $restaurants->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection


@push('js')
<script type="text/javascript">
    let TextEditor = document.querySelectorAll('.editor');

    TextEditor.forEach( (Etr) => {
        CKEDITOR.replace(Etr);
    });

    $(".editRestaurantDetailsBtn").click(function (e) {

        let RestaurantId = $(this).data('restaurant-id');
        let RestaurantTitle = $(this).data('restaurant-title');
        let RestaurantDescription = $(this).data('restaurant-description');
        let RestaurantCity = $(this).data('restaurant-city');
        let RestaurantAddress = $(this).data('restaurant-address');
        let RestaurantSocialLinks = $(this).data('restaurant-social_links');
        let RestaurantCategory = $(this).data('restaurant-category');
        let RestaurantAvailability = $(this).data('restaurant-availability');
        let EditRestaurantUrl = "{{ route('restaurant.management.edit', ':id') }}";

        let ActionUrl = EditRestaurantUrl.replace(':id', RestaurantId);

        $(".edit_restaurant_form").attr('action', ActionUrl);

        $("#EditRestaurantName").val(RestaurantTitle);
        CKEDITOR.instances["EditRestaurantDescription"].setData(RestaurantDescription);
        $("#EditRestaurantCity").val(RestaurantCity).text(RestaurantCity);
        $("#EditRestaurantAddress").val(RestaurantAddress);
        $("#EditRestaurantCategory").val(RestaurantCategory).text(RestaurantCategory);

        $(".embed_facebook_link").val(RestaurantSocialLinks.facebook);
        $(".embed_twitter_link").val(RestaurantSocialLinks.twitter);
        $(".embed_instagram_link").val(RestaurantSocialLinks.instagram);

        $(".availability_from").val(RestaurantAvailability.from);
        $(".availability_to").val(RestaurantAvailability.to);
    });

    $(document).ready(function () {
        $(".DeleteUserBtn").click(function (e) {
            e.preventDefault();

            // get the specified anchor href value
            let url = $(this).attr('href');

            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                confirmButtonColor: '#28a745',
                cancelButtonText: 'No, cancel!',
                cancelButtonColor: '#d33',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    // redirect to the specified anchor href
                    document.location.href = url;

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                    'Cancelled',
                    "User and it's data has not been deleted :)",
                    'error'
                    )
                }
            })
        });
    });

    function getFileName(input) {

        var names = [];

        for (var i = 0; i < input.files.length; i++) {

            names.push(input.files[i].name);
        }

        var inputLabel = $(".fileInputLabel").text(names);

        $(inputLabel).css("overflow", "hidden");
    }
</script>
@endpush

