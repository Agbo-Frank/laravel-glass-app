<x-guest-layout>
    @include("layouts.header")
    @php $upload = 'upload' @endphp
    <x-page-title title="post your glass" :location="$upload" />
    <form class="form" method="POST" action="/product" enctype="multipart/form-data">
        <h3>Upload your Glass</h3>
        @csrf
        <!-- <Alert /> -->
        <x-auth-validation-errors :errors="$errors"/>
        <x-auth-session-status :status="session('status')" />
        <div class="input-field">
            <!-- {/* <i class="fas fa-user"></i> */} -->
            <input 
            type="text" 
            name='name' 
            placeholder="Enter the name of your glasses" 
            :value="{{ old('name') }}"/>
        </div>
        <div class="input-field">
            <!-- {/* <i class="fas fa-lock"></i> */} -->
            <input 
            type="Number" 
            name='price' 
            placeholder="Enter the price of the glasses"
            :value="{{ old('price') }}"/>
        </div>
        <div class="input-field">
            <!-- {/* <i class="fas fa-lock"></i> */} -->
            <textarea 
            name='description' 
            :value="{{ old('description') }}"
            placeholder="Description of the glass"></textarea>
        </div>
        <div class="input-field upload">
            <!-- <div class="upload-product">
                <label htmlFor="myfile">
                    <i class="fa fa-image"></i>Add image of product
                    <input 
                        type="file"   
                        id="myfile" 
                        name='file'
                        ref={i => file = i}
                        multiple
                        onChange={(e) => upload(e)}/>
                </label>
            </div>: -->
            <div class="upload-prompt">
                <i class="fa fa-image"></i>
                <p>
                    Upload Landing photo
                    <label for="myfile">
                        browse
                        <input 
                        type="file"   
                        id="myfile"
                        multiple
                        name='images[]' />
                    </label>
                </p>
                <small>Supports: JPG, PNG, SVG</small>
            </div>
        </div>
        <button type="submit">Upload</button>
    </form>
    <!-- @include("layouts.footer") -->
</x-guest-layout>