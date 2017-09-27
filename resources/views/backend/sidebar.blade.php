     <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id="left-panel">

            <!-- User info -->
            <div class="login-info">
                <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
                    
                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="img/avatars/sunny.png" alt="me" class="online" /> 
                        <span>
                            john.doe 
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a> 
                    
                </span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive-->
            <nav>
                <!-- 
                NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional href="" links. See documentation for details.
                -->

                <ul>
                    <li class="active">
                        <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
                        <ul>
                            <li class="active">
                                <a href="index.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
                            </li>
                            
                        </ul>   
                    </li>

                      <li>
                        <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
                    </li>


                    
                    <li>
                        <a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge margin-right-13">14</span></a>
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
                        <ul>
                            <li>
                                <a href="table.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
                            </li>
                            <li>
                                <a href="jqgrid.html">Jquery Grid</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
                        <ul>
                            <li>
                                <a href="form-elements.html">Smart Form Elements</a>
                            </li>
                            <li>
                                <a href="form-templates.html">Smart Form Layouts</a>
                            </li>
                            <li>
                                <a href="validation.html">Smart Form Validation</a>
                            </li>
                            <li>
                                <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
                            </li>
                            <li>
                                <a href="bootstrap-validator.html">Bootstrap Form Validation</a>
                            </li>
                            <li>
                                <a href="plugins.html">Form Plugins</a>
                            </li>
                            <li>
                                <a href="wizard.html">Wizards</a>
                            </li>
                            <li>
                                <a href="other-editors.html">Bootstrap Editors</a>
                            </li>
                            <li>
                                <a href="dropzone.html">Dropzone</a>
                            </li>
                            <li>
                                <a href="image-editor.html">Image Cropping</a>
                            </li>
                            <li>
                                <a href="ckeditor.html">CK Editor</a>
                            </li>
                        </ul>
                    </li>
                  
                    <li>
                        <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
                    </li>
                 
                 
                 
                    
                 
                </ul>
            </nav>
            

            <span class="minifyme" data-action="minifyMenu"> 
                <i class="fa fa-arrow-circle-left hit"></i> 
            </span>

        </aside>
        <!-- END NAVIGATION -->

        <!-- MAIN PANEL -->