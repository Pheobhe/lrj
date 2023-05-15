<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;


class UserVoter extends Voter
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    //ver editar usuario : valida que sea admin | que el usuario pueda modificar sus propios datos
    const EDIT_USER = 'EDIT_USER';

    //ver editar borrar estructuras valida que sea admin | usuario es ssoo y que la estructura pertenezca al mismo persona que el usuario
    const CHECK_STRUCTURE = 'CHECK_STRUCTURE';

    // Solo se utiliza para crear estructuras: valida que rol sea admin o algun ssoo 
    const CREATE_STRUCTURE = 'CREATE_STRUCTURE';

    protected function supports(string $attribute, $subject): bool
    {   
        
        // si el atributo no esta soportado, retorno falso
        if (!in_array($attribute, [
                            self::EDIT_USER,
                            self::CHECK_STRUCTURE,
                            self::CREATE_STRUCTURE
                            ])) {
                                return false;
                            }             
        return true;

    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // Si el usuario es anonimo se niega el acceso
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... chequea condiciones y retorna true para otorgar permisos ...
        switch ($attribute) {
            case self::EDIT_USER:
                if (!$subject instanceof User) {
                    return false;
                }
                return $this->canEditUser($subject, $user);
            case self::CHECK_STRUCTURE:
                if (!$subject instanceof Structure) {
                    return false;
                }
                return $this->canOperateStructure($subject, $user);
            case self::CREATE_STRUCTURE:
                return $this->canCreateStructure($user);

        }
        
        throw new \LogicException('El atributo a evaluar es invalido');
    }  
     
    


    private function canEditUser(User $userEdit, User $user): bool
    {
        return $user === $userEdit;
    }

    private function canOperateStructure(User $user): bool
    {
        return ($this->security->isGranted("ROLE_GESTOR_SSOO")||$this->security->isGranted("ROLE_CARGA_SSOO"));
    }

    private function canCreateStructure(User $user): bool
    {
    
        return $this->security->isGranted("ROLE_GESTOR_SSOO")||$this->security->isGranted("ROLE_CARGA_SSOO");
    }
}


