<?php

namespace Gestor_cocina\RecetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Photo
 *
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255,nullable=true)
     */
    private $tipo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Photo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Photo
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Photo
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir($subdir ="")
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir($subdir);
    }

    protected function getUploadDir($subdir ="")
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads'.$subdir;
    }
    public function upload($subdir="/temporal",$nombre="")
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }
        if ($nombre=="") {
            $nombre=$this->getFile()->getClientOriginalName();
        }
        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir().$subdir,$nombre
            
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

//     public function move($tipo)
//     {
//        // the file property can be empty if the field is not required
//         if (null === $this->getFile()) {
//             return;
//         }
//         switch ($tipo) {
//             case "receta":
//                 $subdir="recetas";
//                 break;
//             case "producto":
//                 $subdir="productos";
//                 break;
//             case "perfil":
//                 $subdir="perfiles";
//                 break;
//             default:
//                 $subdir="temporal";
//                 break;
//         }
//         print_r("hola");
//         print_r($this->getUploadRootDir().$subdir);
//         // use the original file name here but you should
//         // sanitize it at least to avoid any security issues

//         // move takes the target directory and then the
//         // target filename to move to
//         $this->getFile()->move(
//             $this->getUploadRootDir().$subdir,
//             // 'paco'
//             $this->getFile()->getClientOriginalName()
//         );

//         // // set the path property to the filename where you've saved the file
//         // $this->path = $this->getFile()->getClientOriginalName();

//         // // clean up the file property as you won't need it anymore
//         // $this->file = null;
//     }
}
