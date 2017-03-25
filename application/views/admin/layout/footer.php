<!--底部-->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.8
    </div>
    <strong>Admin@2017-3-16<a href="https://github.com/LaravelChen" target="_blank">LaravelChen</a>.</strong>
</footer>

<!--右侧边栏-->
<aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">最近活动</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">LaravelChen</h4>
                            <p>一个热爱技术的小青年</p>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">任务进度</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href="javascript:void(0);">
                        <h4 class="control-sidebar-subheading">
                            自定义模版设计
                            <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">常规设置</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        报告面板用法
                        <input type="checkbox" class="pull-right" checked/>
                    </label>
                    <p>
                        关于常规设置选项的一些信息
                    </p>
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->

    </div>
</aside>
<div class="control-sidebar-bg"></div>
</div>


<script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/vue/2.0.0-rc.5/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/1.0.2/vue-resource.min.js"></script>
<script src="<?= base_url() . 'resource/dist/js/admin.js' ?>"></script>
<script src="<?= base_url() . 'resource/dist/js/demo.js' ?>"></script>

<!--判断主导航栏是否高亮-->
<script type="text/javascript">
    $(document).ready(function () {
        var path_array = window.location.pathname.split('/');
        var scheme_less_url = '//' + window.location.host + window.location.pathname;
        if (path_array[4] == 'dashboard') {
            scheme_less_url = window.location.protocol + '//' + window.location.host + '/CI/CI-Template/' + path_array[3] + '/' + path_array[4];
        } else {
            scheme_less_url = window.location.protocol + '//' + window.location.host + '/CI/CI-Template/' + path_array[3] + '/' + path_array[4];
        }
        $('ul.treeview-menu>li').find('a[href="' + scheme_less_url + '"]').closest('li').addClass('active');  //二级链接高亮
        $('ul.treeview-menu>li').find('a[href="' + scheme_less_url + '"]').closest('li.treeview').addClass('active');  //一级栏目[含二级链接]高亮
        $('.sidebar-menu>li').find('a[href="' + scheme_less_url + '"]').closest('li').addClass('active');  //一级栏目[不含二级链接]高亮
    });
</script>
</body>
</html>