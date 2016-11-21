<?php // 5isoft.cn , Copyright(C) , All rights reserved.

import("@.ORG.Util.Page");
import('@.ORG.Util.SysLog');
class BaseDataAction extends AppAction{
public function index(){
if($_GET['selectNum']!=null){
$this->assign("selectNum",$_GET['selectNum']);
}
$this->display();
}
public function product() {
$model=M("product");
if($_GET["prod_cate"]){
$map["a.prod_cate"]=$_GET["prod_cate"];
}
$count = $model->alias("a")->
join("twms_prod_cate as b on a.prod_cate=b.pdca_id")->where($map)->count();
$Page = new Page($count,D('Setting')->where(array('set_id'=>1))->getField('set_list_pagesize'));
$show = $Page->show();
$this->assign('page',$show);
$list=$model->alias("a")->
join("twms_prod_cate as b on a.prod_cate=b.pdca_id")->order("prod_id desc")->
limit($Page->firstRow.','.$Page->listRows)->where($map)->select();
$model=M("prod_cate");
$list_cate=$model->order("pdca_id desc")->select();
$this->assign("list_cate",$list_cate);
$this->assign("list",$list);
$this->assign("action","product");
$this->display();
}
public function cate() {
$model=M("prod_cate");
$count = $model->count();
$Page = new Page($count,D('Setting')->where(array('set_id'=>1))->getField('set_list_pagesize'));
$show = $Page->show();
$this->assign('page',$show);
$list=$model->limit($Page->firstRow.','.$Page->listRows)->order("pdca_id desc")->select();
$this->assign("list",$list);
$this->assign("action","cate");
$this->display();
}
public function warehouse() {
$model=D("Warehouse");
$count = $model->count();
$Page = new Page($count,D('Setting')->where(array('set_id'=>1))->getField('set_list_pagesize'));
$show = $Page->show();
$this->assign('page',$show);
$list=$model->limit($Page->firstRow.','.$Page->listRows)->order("sto_id desc")->select();
$this->assign("list",$list);
$this->assign("action","store");
$this->display();
}
public function supplier() {
$model=M("supplier");
$count = $model->count();
$Page = new Page($count,D('Setting')->where(array('set_id'=>1))->getField('set_list_pagesize'));
$show = $Page->show();
$this->assign('page',$show);
$list=$model->limit($Page->firstRow.','.$Page->listRows)->order("sup_id desc")->select();
$this->assign("list",$list);
$this->assign("action","supplier");
$this->display();
}
public function store() {
$model=D("Store");
$count = $model->count();
$Page = new Page($count,D('Setting')->where(array('set_id'=>1))->getField('set_list_pagesize'));
$show = $Page->show();
$this->assign('page',$show);
$list=$model->limit($Page->firstRow.','.$Page->listRows)->order("sto_id desc")->select();
$this->assign("list",$list);
$this->assign("action","store");
$this->display();
}
public function employee() {
$model=M("employee");
$count = $model->count();
$Page = new Page($count,15);
$show = $Page->show();
$this->assign('page',$show);
$list=$model->limit($Page->firstRow.','.$Page->listRows)->order("emp_id desc")->select();
$this->assign("list",$list);
$this->assign("action","employee");
$this->display();
}
public function doAddEmployee(){
$model=M("employee");
$model->create();
if($_GET["emp_isdefault"]==1){
$id=$model->add($_GET);
$model->where('emp_id!='.$id)->save(array('emp_isdefault'=>0));
}else{
$model->add($_GET);
}
SysLog::writeLog("增加员工");
echo 1;
}
public function doEditEmployee(){
$model=M("employee");
if($_GET["emp_isdefault"]==1){
$model->save($_GET);
$model->where('emp_id!='.$_GET['emp_id'])->save(array('emp_isdefault'=>0));
}else{
$model->save($_GET);
}
SysLog::writeLog("编辑员工");
echo 1;
}
public function getEmployeeById() {
$model=M("employee");
$one=$model->where(array("emp_id"=>$_GET['emp_id']))->find();
echo json_encode($one);
}
public function deleteEmployee() {
$model=M("employee");
$model->where(array("emp_id"=>$_GET['emp_id']))->delete();
SysLog::writeLog("删除员工");
echo 1;
}
public function doAddSupplier(){
$model=M("supplier");
$model->create();
$model->add($_GET);
SysLog::writeLog("增加供应商");
echo 1;
}
public function doEditSupplier(){
$model=M("supplier");
$model->save($_GET);
SysLog::writeLog("编辑供应商");
echo 1;
}
public function getSupplierById() {
$model=M("supplier");
$one=$model->where(array("sup_id"=>$_GET['sup_id']))->find();
echo json_encode($one);
}
public function deleteSupplier() {
$model=M("supplier");
$model->where($_GET)->delete();
SysLog::writeLog("删除供应商");
echo 1;
}
public function customer() {
$model=M("customer");
$count = $model->count();
$Page = new Page($count,D('Setting')->where(array('set_id'=>1))->getField('set_list_pagesize'));
$show = $Page->show();
$this->assign('page',$show);
$list=$model->limit($Page->firstRow.','.$Page->listRows)->order("cust_id desc")->select();
$this->assign("list",$list);
$this->assign("action","customer");
$this->display();
}
public function doAddCustomer(){
$model=M("customer");
$model->add($_GET);
echo 1;
SysLog::writeLog("增加客户");
}
public function toEditCustomer(){
$model=M("customer");
$one=$model->where($_GET)->find();
$this->assign("one",$one);
$this->display();
}
public function doEditCustomer(){
$model=M("customer");
$model->save($_GET);
echo 1;
SysLog::writeLog("编辑客户");
}
public function deleteCustomer() {
$model=M("customer");
$model->where($_GET)->delete();
echo 1;
SysLog::writeLog("删除客户");
}
public function doAddCate(){
$model=M("prod_cate");
$data["pdca_name"]=$_GET["pdca_name"];
$model->add($data);
echo 1;
SysLog::writeLog("增加产品类别");
}
public function toAddProduct(){
$model=M("prod_cate");
$list=$model->order("pdca_id desc")->select();
$this->assign("list",$list);
$this->display();
}
public function doAddProduct(){
$model=M("product");
$model->add($_GET);
echo 1;
SysLog::writeLog("添加产品");
}
public function doAddStore(){
$model=M("store");
$data["sto_name"]=$_GET["sto_name"];
$data["sto_address"]=$_GET["sto_address"];
$data["sto_storer"]=$_GET["sto_storer"];
$data["sto_phone"]=$_GET["sto_phone"];
$data["sto_isdefault"]=$_GET["sto_isdefault"];
$data["sto_remark"]=$_GET["sto_remark"];
$data["sto_mobile"]=$_GET["sto_mobile"];
if($data["sto_isdefault"]==1){
$id=$model->add($data);
$model->where('sto_id!='.$id)->save(array('sto_isdefault'=>0));
}else{
$model->add($data);
}
echo 1;
SysLog::writeLog("增加仓库");
}
public function toEditStore(){
$model=M("store");
$one=$model->where(array("sto_id"=>$_GET['sto_id']))->find();
$this->assign("one",$one);
$this->display();
}
public function doEditCate(){
$model=M("prod_cate");
$model->save($_GET);
echo 1;
SysLog::writeLog("编辑产品类别");
}
public function doEditStore(){
$model=M("store");
if($_GET["sto_isdefault"]==1){
$model->save($_GET);
$model->where('sto_id!='.$_GET['sto_id'])->save(array('sto_isdefault'=>0));
}else{
$model->save($_GET);
}
echo 1;
SysLog::writeLog("编辑仓库");
}
public function deleteProduct() {
$model=M("product");
$model->where(array("prod_id"=>$_GET['prod_id']))->delete();
echo 1;
SysLog::writeLog("删除产品");
}
public function deleteStore() {
$model=M("store");
$model->where($_GET)->delete();
echo 1;
SysLog::writeLog("删除仓库");
}
public function deleteCate() {
$model=M("prod_cate");
$model->where($_GET)->delete();
SysLog::writeLog("删除产品类别");
echo 1;
}
public function toEditProduct() {
$model=M("product");
$one=$model->where(array("prod_id"=>$_GET['prod_id']))->find();
$this->assign("one",$one);
$model=M("prod_cate");
$list_cate=$model->order("pdca_id desc")->select();
$this->assign("list_cate",$list_cate);
$this->display();
}
public function getProdCateById() {
$model=M("prod_cate");
$one=$model->where(array("pdca_id"=>$_GET['pdca_id']))->find();
echo json_encode($one);
}
public function getProdById() {
$model=M("product");
$one=$model->where(array("prod_id"=>$_GET['prod_id']))->find();
echo json_encode($one);
}
public function getStoreById() {
$model=M("store");
$one=$model->where(array("sto_id"=>$_GET['sto_id']))->find();
echo json_encode($one);
}
public function getCustomerById() {
$model=M("customer");
$one=$model->where(array("cust_id"=>$_GET['cust_id']))->find();
echo json_encode($one);
}
public function toEditCate() {
$model=M("prod_cate");
$one=$model->where(array("pdca_id"=>$_GET['pdca_id']))->find();
$this->assign("one",$one);
$this->display();
}
public function doEditProduct() {
$model=M("product");
$data["prod_name"]=$_GET["prod_name"];
$data["prod_price"]=$_GET["prod_price"];
$data["prod_count"]=$_GET["prod_count"];
$data["prod_cate"]=$_GET["prod_cate"];
$model->where(array("prod_id"=>$_GET['prod_id']))->save($data);
echo 1;
SysLog::writeLog("编辑产品");
}
}
