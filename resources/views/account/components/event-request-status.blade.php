    <!--    load page-->
    <form action="{{route('change.update',$product->id)}}" method="post">
        @csrf
        <div>
            <select name="status" id="status" class="form-control">
                <option value="1" {{ $product->status == 1 ? 'selected' : ''}}>Panding</option>
                <option value="2" {{ $product->status == 2 ? 'selected' : ''}}>Active</option>
                <option value="3" {{ $product->status == 3 ? 'selected' : ''}}>Rejected</option>
                <option value="0" {{ $product->status == 4 ? 'selected' : ''}}>Draft</option>
            </select>
        </div>
        <div class="pt-2 text-right">
            <button type="submit" class="btn btn-aqua">Update Status</button>
        </div>
    </form>