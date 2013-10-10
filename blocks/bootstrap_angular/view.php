<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
 <script>
angular.element(document).ready(function() {
angular.bootstrap(document, ["<?php echo $angular_app_name;?>"]);
});
</script>
<?php 
$u = new User();
if($u->isLoggedIn()){
?>
Angularjs active
<?}?>