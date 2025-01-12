<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($partner->name) ? $partner->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_area') ? 'has-error' : ''}}">
    <label for="name_area" class="control-label">{{ 'ชื่อสาขา' }}</label>
    <input class="form-control" name="name_area" type="text" id="name_area" value="{{ isset($partner->name_area) ? $partner->name_area : ''}}" >
    {!! $errors->first('name_area', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'ลิงค์' }}</label>
    <input class="form-control" name="link" type="text" id="link" value="{{ isset($partner->link) ? $partner->link : ''}}" >
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="phone" class="control-label">{{ 'เบอร์' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($partner->phone) ? $partner->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="lat" class="control-label">{{ 'Lat' }}</label>
    <input class="form-control" name="lat" type="text" id="lat" value="{{ isset($partner->lat) ? $partner->lat : ''}}" >
    {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lng') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="lng" class="control-label">{{ 'Lng' }}</label>
    <input class="form-control" name="lng" type="text" id="lng" value="{{ isset($partner->lng) ? $partner->lng : ''}}" >
    {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="logo" class="control-label">{{ 'รูปโลโก้' }}</label>
    <input class="form-control" name="logo" type="file" id="logo" value="{{ isset($partner->logo) ? $partner->logo : ''}}" >
    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="province" class="control-label">{{ 'จังหวัด' }}</label>
    <input class="form-control" name="province" type="text" id="province" value="{{ isset($partner->province) ? $partner->province : ''}}" >
    {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="district" class="control-label">{{ 'อำเภอ' }}</label>
    <input class="form-control" name="district" type="text" id="district" value="{{ isset($partner->district) ? $partner->district : ''}}" >
    {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sub_district') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="sub_district" class="control-label">{{ 'ตำบล' }}</label>
    <input class="form-control" name="sub_district" type="text" id="sub_district" value="{{ isset($partner->sub_district) ? $partner->sub_district : ''}}" >
    {!! $errors->first('sub_district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('link_line') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="link_line" class="control-label">{{ 'Link Line' }}</label>
    <input class="form-control" name="link_line" type="text" id="link_line" value="{{ isset($partner->link_line) ? $partner->link_line : ''}}" >
    {!! $errors->first('link_line', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('qr_cond_line') ? 'has-error' : ''}}" style="margin-top:10px">
    <label for="qr_cond_line" class="control-label">{{ 'QR-Code Line' }}</label>
    <input class="form-control" name="qr_cond_line" type="file" id="qr_cond_line" value="{{ isset($partner->qr_cond_line) ? $partner->qr_cond_line : ''}}" >
    {!! $errors->first('qr_cond_line', '<p class="help-block">:message</p>') !!}
</div>
<br>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
