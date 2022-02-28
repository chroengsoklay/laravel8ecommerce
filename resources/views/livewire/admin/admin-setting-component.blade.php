<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    @if(Session::has('setting_message'))
                        <div class="alert alert-success" role="alert">{{Session::get('setting_message')}}</div>
                    @endif
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="saveSettings">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Admin Email</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Admin Email" wire:model="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Contact Phone 1</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Phone 1" wire:model="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Contact Phone 2</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Phone 2" wire:model="phone2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Address" wire:model="address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Map</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Map" wire:model="map">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Facebook</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Facebook" wire:model="facebook">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Pinterest</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Pinterest" wire:model="pinterest">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Twitter</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Twitter" wire:model="twitter">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Youtube</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Youtube" wire:model="youtube">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
