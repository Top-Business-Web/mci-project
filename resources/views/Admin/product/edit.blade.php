<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST" action="{{ route('product.update', $product->id) }}"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- This Input Hidden for send id to save cause i use ajax -->
    <input type="hidden" name="id" value="{{ $product->id }}">
    <!-- Satrt Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Title_Ar</label>
                <input type="text" name="title_ar" value="{{ $product->title_ar }}" class="form-control"
                       id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Sub Ar</label>
                <input type="text" name="sub_title_ar" value="{{ $product->title_ar }}" class="form-control"
                       id="exampleFormControlInput1">
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Sku</label>
                <input type="text" name="sku" readonly value="{{ $product->sku }}" class="form-control"
                       id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <!-- End Row -->
    <!-- Satrt Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Title En</label>
                <input type="text" name="title_en" value="{{ $product->title_en }}" class="form-control"
                       id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Sub En</label>
                <input type="text" name="sub_title_en" value="{{ $product->sub_title_en }}" class="form-control"
                       id="exampleFormControlInput1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Tag</label>

                <input type="text" name="tags" value="{{($product->tags == null) ? '': implode(' ', $product->tags) }}"
                       class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Category</label>
                <select name="category_id" class="form-control" required="required">
                    <option value="" disabled>Select Category</option>
                    @foreach ($categoreis as $category)
                        <option value="{{ $category->id }}"
                        @if ($product->category)
                            {{ $category->title_en == $product->category->title_en ? 'selected' : '' }}
                                @endif>
                            {{ $category->title_en }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <!-- End Row -->
    <!-- Satrt Row -->
    <div class="row">


        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Image</label>
                <input type="file" name="files[]" multiple class="form-control" id="exampleFormControlInput1">
                <span class="form-text text-danger text-center"> Recomended : 700 X 700 Px <br> Extension : png, gif, jpeg,
                    jpg,webp</span>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <!-- Satrt Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Description Ar</label>
                <textarea name="desc_ar" class="form-control" id="" cols="30"
                          rows="10">{{ $product->desc_ar }}</textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Description En</label>
                <textarea name="desc_en" class="form-control" id="" cols="30"
                          rows="10">{{ $product->desc_en }}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">PDF</label>
                <input type="file" name="pdf" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <label class="control-label">itemes</label>
    @if($product->details != null)
        <label class="control-label">Part Number</label>
        <div class="row">
            <div class="col-12">
                <div class="form-group itemItems">
                    @foreach($product->details as $item)
                        <input type="text" name="items[]" class="form-control mt-3 InputItem InputItemExtra"
                               value="{{ $item }}">
                    @endforeach
                </div>
                <span class="badge badge-danger Issue"></span>
            </div>
        </div>
    @else
        <div class="row">
            <label class="control-label">Part Number</label>

            <div class="col-4">
                <div class="form-group itemItems">
                    <input type="text" name="items[]" class="form-control InputItem InputItemExtra"
                           value="">
                </div>
            </div>
        </div>
    @endif
    <div class="col-4">
        <div class="form-group ButtonItems">
            <button type="button" class="btn btn-sm btn-primary MoreItem">More Number</button>
            <button type="button" class="btn btn-sm btn-danger delItem">Delete</button>
        </div>
    </div>
    <!-- End Row -->
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>

    </div>
</form>
<!-- End Form -->

<script>
    $(document).on('click', '.delItem', function(){
        var Item = $('.InputItemExtra').last();
        if (Item.val() == '') {
            Item.fadeOut();
            Item.remove();
            $('.Issue').removeClass('badge-danger').addClass('badge-success');
            $('.Issue').html('The element deleted');
            setTimeout(function (){
                $('.Issue').html('');
            },3000)
        } else {
                $('.Issue').html('The element must be empty');
            setTimeout(function (){
                $('.Issue').html('');
            },3000)

        }
    })

    $(document).on('click', '.MoreItem', function () {
        var Item = $('.InputItemExtra').last();
        if (Item.val() !== '') {
            $('.itemItems').append('<input type="text" name="items[]" class="form-control InputItemExtra mt-3">')
        }
    })
</script>
