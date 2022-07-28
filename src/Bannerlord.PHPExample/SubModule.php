<?php

namespace Bannerlord\PHPExample;

class SubModule extends \TaleWorlds\MountAndBlade\MBSubModuleBase {

  function OnSubModuleLoad() {
      return parent::OnSubModuleLoad();
  }

    function OnSubModuleUnloaded() {
      return parent::OnSubModuleUnloaded();
  }

    function OnBeforeInitialModuleScreenSetAsRoot() {
      $message = new \TaleWorlds\Library\InformationMessage('test');
      \TaleWorlds\Library\InformationManager::DisplayMessage($message);
    
      return parent::OnBeforeInitialModuleScreenSetAsRoot();
  }

}