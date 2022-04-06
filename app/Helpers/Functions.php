<?php
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