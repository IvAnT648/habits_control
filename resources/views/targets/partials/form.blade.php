<div class="form-group row">
    <label for="title" class="col-3 col-form-label-lg">Target title</label>
    <div class="col-sm-9">
        <input id="title" name="title" class="form-control" type="text" value="{{ $target->title ?? '' }}" required>
        <small id="titleHelpBlock" class="form-text text-muted">
            Specify your target's name.
        </small>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label-lg">Target description</label>
    <div class="col-sm-9">
        <textarea id="description" name="description" class="form-control">{{ $target->description ?? '' }}</textarea>
        <small id="descriptionHelpBlock" class="form-text text-muted">
            Describe your target here.
        </small>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="reasons" class="col-sm-3 col-form-label-lg">What reasons?</label>
    <div class="col-sm-9">
        <textarea id="reasons" name="reasons" class="form-control">{{ $target->reasons ?? '' }}</textarea>
        <small id="titleHelpBlock" class="form-text text-muted">
            Describe reasons why you stand the target.
        </small>
    </div>
</div>
<br>
<div class="form-group">
    <button style="margin: 5px" type="submit" class="btn btn-primary btn-lg pull-right">Save</button>
    <a style="margin: 5px" class="btn btn-secondary btn-lg pull-right" href="{{ url('targets') }}">Back</a>
</div>
<br>
