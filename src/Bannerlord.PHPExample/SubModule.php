<?php

namespace Bannerlord\PHPExample;

use TaleWorlds\MountAndBlade\MBSubModuleBase;
use TaleWorlds\Library\InformationMessage;
use TaleWorlds\Library\InformationManager;

class SubModule extends MBSubModuleBase {

  public function OnSubModuleLoad() {
      return parent::OnSubModuleLoad();
  }

  public function OnSubModuleUnloaded() {
      return parent::OnSubModuleUnloaded();
  }

  public function OnBeforeInitialModuleScreenSetAsRoot() {
      $message = new InformationMessage('test');
      InformationManager::DisplayMessage($message);
    
      return parent::OnBeforeInitialModuleScreenSetAsRoot();
  }

}
