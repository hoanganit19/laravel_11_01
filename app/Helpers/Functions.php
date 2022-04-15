<?php
use App\Models\Options;
use App\Models\Groups;

function activeMenu($routeName){
    $currentUrl = request()->url();
    $currentUrl = trim($currentUrl, '/');

    $routeUrl = route($routeName);

    $routeUrl = trim($routeUrl, '/');

    if ($currentUrl===$routeUrl){
        return 'active';
    }

    return '';
}

function openSubMenu($moduleName=''){

    $currentPrefix = request()->route()->getPrefix();
    $currentPrefixArr = array_filter(explode('/', $currentPrefix));
    $lastPrefix = end($currentPrefixArr);

    if ($lastPrefix===$moduleName){
        return 'menu-open';
    }

    return '';
}


//Đệ quy chuyên mục select option
function getCategoriesSelect($dataCategories, $parentId=0, $char='', $current=0, $id=0){
    if (!empty($dataCategories)){
        foreach ($dataCategories as $key => $item){
            if ($item->parent_id==$parentId){

                if ($current==$item->id){
                    $selected = 'selected';
                }else{
                    $selected = '';
                }

                if ($id!=0){
                    if ($id!==$item->id){
                        echo '<option value="'.$item->id.'" '.$selected.'>'.$char.$item->name.'</option>';
                    }
                }else{
                    echo '<option value="'.$item->id.'" '.$selected.'>'.$char.$item->name.'</option>';
                }

                getCategoriesSelect($dataCategories, $item->id, ' -- '.$char, $current, $id);
                unset($dataCategories[$key]);
            }
        }
    }
}

//Đệ quy chuyên mục checkbox
function getCategoriesCheckbox($dataCategories, $parentId=0, $char='', $current=[]){
    if (!empty($dataCategories)){
        foreach ($dataCategories as $key => $item){
            if ($item->parent_id==$parentId){

                $selected = '';

                if (!empty($current)){
                    if (in_array($item->id, $current)){
                        $selected = 'checked';
                    }
                }

                echo '<label for="category_'.$item->id.'"><input id="category_'.$item->id.'" name="category_id[]" type="checkbox" value="'.$item->id.'" '.$selected.'/> '.$char.$item->name.'</label>';

                getCategoriesCheckbox($dataCategories, $item->id, ' -- '.$char, $current);
                unset($dataCategories[$key]);
            }
        }
    }
}

function getOption($key=''){
    if (!empty($key)){
        $option = Options::where('opt_key', $key)->first();
        if (!empty($option)){
            return $option->opt_value;
        }
    }else{
        $options = Options::all();
        $optionsArr = [];
        if ($options->count()>0){
            foreach ($options as $option){
                $optionsArr[$option->opt_key] = $option->opt_value;
            }
        }
        return $optionsArr;
    }

    return;
}

function hasPermission($groupId, $module, $role){
    $group = Groups::find($groupId);

    if (!empty($group)){
        $roleJson = $group->permissions;
        if (!empty($roleJson)){
            $roleArr = json_decode($roleJson, true);
            if (!empty($roleArr[$module]) && in_array($role, $roleArr[$module])){
                return true;
            }
        }
    }

    return false;
}








