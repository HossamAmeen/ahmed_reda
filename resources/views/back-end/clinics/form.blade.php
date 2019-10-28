                                        @php $input = "address"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">العنوان</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="{{ $input }}" 
                                                        value="{{ isset($row) ? $row->{$input} : '' }}"/>
                                                @error($input)
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>    
                                        @php $input = "en_address"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">العنوان بالنجليزيه</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="{{ $input }}" 
                                                        value="{{ isset($row) ? $row->{$input} : '' }}"/>
                                                @error($input)
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>    
                                        @php $input = "phone"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">الهاتف</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="{{ $input }}" 
                                                        value="{{ isset($row) ? $row->{$input} : '' }}"/>
                                                @error($input)
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>    
                                        @php $input = "appointment"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">المواعيد</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="{{ $input }}" 
                                                        value="{{ isset($row) ? $row->{$input} : '' }}"/>
                                                @error($input)
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>    
                                        @php $input = "en_appointment"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">المواعيد بالانجليزية</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="{{ $input }}" 
                                                        value="{{ isset($row) ? $row->{$input} : '' }}"/>
                                                @error($input)
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>           
                                       