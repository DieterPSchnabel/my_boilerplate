@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-home"></i> {{ trans('navs.general.home') }}
                </div>

                <div class="panel-body">
                    {{ trans('strings.frontend.welcome_to', ['place' => app_name()]) }}
                </div>

                <div class="box-body" style="padding:0 3em;color:#666">
                    <?php echo getLanguageBlock('backend.lang.welcome'); ?>

                </div><!-- /.box-body -->


                <div class="panel-body">
hallo DUT

<br><br>
                    Zugriffsverwaltung: Benutzer verwalten, Roles, Rechte
                    <br><br>
                    Dieser Boilerplate kommt mit einer voll funktionsfähigen Zugangskontroll-Bibliothek, um Benutzer/Rollen und Berechtigungen zu verwalten.
                    <br><br>
                    Log Viewer: grafisch und Logs (mit critical tags)
                    <br><br>
                    Sprache wählen im Frontend
                    <br><br>
                    Debugbar
                    <br><br>
                    AdminLTE theme von https://almsaeedstudio.com
                    <br><br>
                    vorbereitet für Social Login !!  und für Google Recaptcha
                    <br><br>
                    <a target="_blank" href="https://github.com/rappasoft/laravel-5-boilerplate/wiki/1.-Installation">alle Features unter: https://github.com/rappasoft/laravel-5-boilerplate/wiki/1.-Installation</a>
                    <br><br>
                    getLanguageBlock(  als Ausgangspunkt für Tabellen-basierte Translations


                </div>

            <h3>
            <a id="user-content-features" class="anchor" href="#features" aria-hidden="true">xyxyxyx
            </a>Features -  
                <?php
                echo config('app.locale_php') ;
                ?>
            </h3>

            <div style="margin:30px 30px">
            <?php 
/*          echo config('locale.languages')[session()->get('locale')][1] ;

            echo ' - ';
            echo config('locale.languages')[session()->get('locale')][0] ;
            echo ' - ';

            echo config('app.locale_php') ;*/
            

            //$s_data = $request->session()->all();
            $s_data = session()->all();
            echo var_dump($s_data);
            ?>
            </div>

            <ul style="margin-left:50px">
            <li>
            <a href="https://github.com/rappasoft/laravel-5-boilerplate/wiki/2.-Access-Control">Custom Access Control System</a> (Authentication/Users/Roles/Permissions)

            <ul>
            <li>Register/Login/Logout/Password Reset</li>
            <li>Third party login (Github/Facebook/Twitter/Google/Linked In/BitBucket)</li>
            <li>Account Confirmation By E-mail</li>
            <li>Resend Confirmation E-mail</li>
            <li>Login Throttling</li>
            <li>Administrator Management

            <ul>
            <li>User Index</li>
            <li>Activate/Deactivate Users</li>
            <li>Soft &amp; Permanently Delete Users</li>
            <li>Resend User Confirmation E-mails</li>
            <li>Change Users Password</li>
            <li>Create/Manage Roles</li>
            <li>Manage Users Roles/Permissions</li>
            <li>"Login As" User</li>
            </ul>
            </li>
            </ul>
            </li>
            <li>Default Responsive Layout</li>
            <li>Frontend and Backend Controllers</li>
            <li>User Dashboard</li>
            <li>Administration Dashboard with <a href="https://almsaeedstudio.com/">Admin LTE</a> Theme</li>
            <li>Namespaced Routes</li>
            <li>Form/HTML Facades Included</li>
            <li>Default Forms Converted to Form Helper Methods</li>
            <li>Master Layout Files with common sections</li>
            <li>Laravel Elixir 5.0</li>
            <li>Elixir Compilation and Auto-Prefixation of CSS in header</li>
            <li>Elixir Compilation and Auto-Prefixation of JS in footer</li>
            <li>Helper functions</li>
            <li>Javascript/jQuery Snippets</li>
            <li><a href="http://www.getbootstrap.com">Bootstrap 3</a></li>
            <li><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a></li>
            <li>Global Messages/Exception Handling</li>
            <li>Form Macros (State and Country dropdowns, easy to extend)</li>
            <li><a href="https://github.com/laravel/socialite">Socialite Integration</a></li>
            <li><a href="https://github.com/letrunghieu/active">Active Menu</a></li>
            <li><a href="https://github.com/laracasts/PHP-Vars-To-Js-Transformer">PHP to Javascript Transformer</a></li>
            <li><a href="https://github.com/ARCANEDEV/LogViewer">ARCANEDEV Log Viewer</a></li>
            <li><a href="http://laravel-breadcrumbs.davejamesmiller.com/en/latest/index.html">Dynamic Breadcrumbs</a></li>
            <li>Localization with RTL support in 9 languages so far.</li>
            <li><a href="https://github.com/creativeorange/gravatar">Gravatar</a></li>
            <li><a href="https://github.com/barryvdh/laravel-debugbar">Laravel Debugbar</a></li>
            <li><a href="https://github.com/spatie/laravel-backup">Laravel Backup</a></li>
            <li><a href="https://github.com/laracasts/Laravel-5-Generators-Extended">Laravel Generators</a></li>
            <li><a href="https://datatables.net/">jQuery Datatables</a></li>
            <li>Built in custom history management facade for accountability</li>
            <li>Event subscribers</li>
            <li><a href="https://github.com/ARCANEDEV/noCAPTCHA">Google reCaptcha</a></li>
            <li>Standards

            <ul>
            <li>PSR-2</li>
            <li>Clean Controllers</li>
            <li>Repository/Contract Implementations</li>
            <li>Request Classes</li>
            <li>Events/Handlers</li>
            <li>Entire application split between frontend/backend</li>
            <li>Localization Throughout</li>
            </ul>
            </li>
            </ul>

            </div><!-- panel -->

        </div><!-- col-md-10 -->

        @role('Administrator')
            {{-- You can also send through the Role ID --}}

            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_blade_extensions') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 1: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endauth

        @if (access()->hasRole('Administrator'))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.role_name') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 2: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasRole(1))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.role_id') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 3: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasRoles(['Administrator', 1]))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.array_roles_not') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 4: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        {{-- The second parameter says the user must have all the roles specified. Administrator does not have the role with an id of 2, so this will not show. --}}
        @if (access()->hasRoles(['Administrator', 2], true))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.array_roles') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @permission('view-backend')
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.permission_name') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 5: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view-backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endauth

        @if (access()->hasPermission(1))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.permission_id') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 6: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasPermissions(['view-backend', 1]))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.array_permissions_not') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 7: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasPermissions(['view-backend', 2], true))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.array_permissions') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.js_injected_from_controller') }}</div>

                <div class="panel-body">
                    {{ trans('strings.frontend.test') . ' 8: ' . trans('strings.frontend.tests.view_console_it_works') }}
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> Bootstrap Glyphicon {{ trans('strings.frontend.test') }}</div>

                <div class="panel-body">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-euro" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-cloud" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> Font Awesome {{ trans('strings.frontend.test') }}</div>

                <div class="panel-body">
                    <i class="fa fa-home"></i>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-pinterest"></i>
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop