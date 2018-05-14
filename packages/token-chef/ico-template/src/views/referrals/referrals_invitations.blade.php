@extends('ico-template::layouts.dashboard_portlet', [
'title' => trans('ico-template::home.my_invitations')
])

@section('portlet_content')
    <div class="row">
        <div class="nice-table">
            <div class="tab-pane" id="referrals" role="tabpanel">
                <table data-toggle="table" class="table" id="invitationsTable" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined At</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 center">
            <button id="createNewInvitation" class="btn btn-dark">
                @lang('ico-template::home.create_new_invitation')
            </button>
        </div>
    </div>
@overwrite