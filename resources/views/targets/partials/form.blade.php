<label>Target title</label>
<input name="title" type="text" value="{{ $target->title ?? '' }} required">

<label>Target description</label>
<textarea name="description">{{ $target->description ?? '' }}</textarea>

<label>What reasons?</label>
<textarea name="reasons">{{ $target->reasons ?? '' }}</textarea>

<button type="submit">Save</button>
