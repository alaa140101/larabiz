<div class="form-group">
  {{Form::label($name, null, ['class' => 'form-control'], $attributes)}}
  {{Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes))}}
</div>