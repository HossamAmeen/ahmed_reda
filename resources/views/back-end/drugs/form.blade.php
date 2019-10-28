                                        @php $input = "title"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">اسم العلاج </label>
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
                                        @php $input = "en_title"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">اسم العلاج بالانجليزي</label>
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
                                       
                                       