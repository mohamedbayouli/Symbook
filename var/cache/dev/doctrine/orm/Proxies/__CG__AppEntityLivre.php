<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Livre extends \App\Entity\Livre implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cat' => [parent::class, 'cat', null],
        "\0".parent::class."\0".'commandeLivres' => [parent::class, 'commandeLivres', null],
        "\0".parent::class."\0".'dateEdition' => [parent::class, 'dateEdition', null],
        "\0".parent::class."\0".'editeur' => [parent::class, 'editeur', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'image' => [parent::class, 'image', null],
        "\0".parent::class."\0".'isbn' => [parent::class, 'isbn', null],
        "\0".parent::class."\0".'prix' => [parent::class, 'prix', null],
        "\0".parent::class."\0".'qte' => [parent::class, 'qte', null],
        "\0".parent::class."\0".'resume' => [parent::class, 'resume', null],
        "\0".parent::class."\0".'slug' => [parent::class, 'slug', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        'cat' => [parent::class, 'cat', null],
        'commandeLivres' => [parent::class, 'commandeLivres', null],
        'dateEdition' => [parent::class, 'dateEdition', null],
        'editeur' => [parent::class, 'editeur', null],
        'id' => [parent::class, 'id', null],
        'image' => [parent::class, 'image', null],
        'isbn' => [parent::class, 'isbn', null],
        'prix' => [parent::class, 'prix', null],
        'qte' => [parent::class, 'qte', null],
        'resume' => [parent::class, 'resume', null],
        'slug' => [parent::class, 'slug', null],
        'titre' => [parent::class, 'titre', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
