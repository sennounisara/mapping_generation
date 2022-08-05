<?php


/**
 * Base class that represents a row from the 'Enveloppe' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnveloppe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEnveloppePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEnveloppePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_enveloppe_electro field.
     * @var        int
     */
    protected $id_enveloppe_electro;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the offre_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $offre_id;

    /**
     * The value for the champs_optionnels field.
     * @var        resource
     */
    protected $champs_optionnels;

    /**
     * The value for the fichier field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $fichier;

    /**
     * The value for the supprime field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprime;

    /**
     * The value for the cryptage field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $cryptage;

    /**
     * The value for the nom_fichier field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the hash field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $hash;

    /**
     * The value for the type_env field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_env;

    /**
     * The value for the sous_pli field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sous_pli;

    /**
     * The value for the attribue field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $attribue;

    /**
     * The value for the dateheure_ouverture field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $dateheure_ouverture;

    /**
     * The value for the agent_id_ouverture field.
     * @var        int
     */
    protected $agent_id_ouverture;

    /**
     * The value for the agent_id_ouverture2 field.
     * @var        int
     */
    protected $agent_id_ouverture2;

    /**
     * The value for the donnees_ouverture field.
     * @var        resource
     */
    protected $donnees_ouverture;

    /**
     * The value for the horodatage_donnees_ouverture field.
     * @var        resource
     */
    protected $horodatage_donnees_ouverture;

    /**
     * The value for the statut_enveloppe field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $statut_enveloppe;

    /**
     * The value for the agent_telechargement field.
     * @var        int
     */
    protected $agent_telechargement;

    /**
     * The value for the date_telechargement field.
     * @var        string
     */
    protected $date_telechargement;

    /**
     * The value for the repertoire_telechargement field.
     * @var        string
     */
    protected $repertoire_telechargement;

    /**
     * The value for the nom_agent_ouverture field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_agent_ouverture;

    /**
     * The value for the dateheure_ouverture_agent2 field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $dateheure_ouverture_agent2;

    /**
     * The value for the certificat field.
     * @var        string
     */
    protected $certificat;

    /**
     * The value for the montant field.
     * @var        double
     */
    protected $montant;

    /**
     * The value for the montant_apres_modification field.
     * @var        double
     */
    protected $montant_apres_modification;

    /**
     * The value for the type_attributaire field.
     * @var        string
     */
    protected $type_attributaire;

    /**
     * The value for the devise field.
     * @var        string
     */
    protected $devise;

    /**
     * The value for the rabais_preference_national field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $rabais_preference_national;

    /**
     * The value for the type_correction_montant field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type_correction_montant;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->organisme = '';
        $this->offre_id = 0;
        $this->fichier = 0;
        $this->supprime = '0';
        $this->cryptage = '1';
        $this->nom_fichier = '';
        $this->hash = '';
        $this->type_env = 0;
        $this->sous_pli = 0;
        $this->attribue = '0';
        $this->dateheure_ouverture = '0000-00-00 00:00:00';
        $this->statut_enveloppe = 1;
        $this->nom_agent_ouverture = '';
        $this->dateheure_ouverture_agent2 = '0000-00-00 00:00:00';
        $this->rabais_preference_national = '0';
        $this->type_correction_montant = '';
    }

    /**
     * Initializes internal state of BaseCommonEnveloppe object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_enveloppe_electro] column value.
     * 
     * @return int
     */
    public function getIdEnveloppeElectro()
    {

        return $this->id_enveloppe_electro;
    }

    /**
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [offre_id] column value.
     * 
     * @return int
     */
    public function getOffreId()
    {

        return $this->offre_id;
    }

    /**
     * Get the [champs_optionnels] column value.
     * 
     * @return resource
     */
    public function getChampsOptionnels()
    {

        return $this->champs_optionnels;
    }

    /**
     * Get the [fichier] column value.
     * 
     * @return int
     */
    public function getFichier()
    {

        return $this->fichier;
    }

    /**
     * Get the [supprime] column value.
     * 
     * @return string
     */
    public function getSupprime()
    {

        return $this->supprime;
    }

    /**
     * Get the [cryptage] column value.
     * 
     * @return string
     */
    public function getCryptage()
    {

        return $this->cryptage;
    }

    /**
     * Get the [nom_fichier] column value.
     * 
     * @return string
     */
    public function getNomFichier()
    {

        return $this->nom_fichier;
    }

    /**
     * Get the [hash] column value.
     * 
     * @return string
     */
    public function getHash()
    {

        return $this->hash;
    }

    /**
     * Get the [type_env] column value.
     * 
     * @return int
     */
    public function getTypeEnv()
    {

        return $this->type_env;
    }

    /**
     * Get the [sous_pli] column value.
     * 
     * @return int
     */
    public function getSousPli()
    {

        return $this->sous_pli;
    }

    /**
     * Get the [attribue] column value.
     * 
     * @return string
     */
    public function getAttribue()
    {

        return $this->attribue;
    }

    /**
     * Get the [dateheure_ouverture] column value.
     * 
     * @return string
     */
    public function getDateheureOuverture()
    {

        return $this->dateheure_ouverture;
    }

    /**
     * Get the [agent_id_ouverture] column value.
     * 
     * @return int
     */
    public function getAgentIdOuverture()
    {

        return $this->agent_id_ouverture;
    }

    /**
     * Get the [agent_id_ouverture2] column value.
     * 
     * @return int
     */
    public function getAgentIdOuverture2()
    {

        return $this->agent_id_ouverture2;
    }

    /**
     * Get the [donnees_ouverture] column value.
     * 
     * @return resource
     */
    public function getDonneesOuverture()
    {

        return $this->donnees_ouverture;
    }

    /**
     * Get the [horodatage_donnees_ouverture] column value.
     * 
     * @return resource
     */
    public function getHorodatageDonneesOuverture()
    {

        return $this->horodatage_donnees_ouverture;
    }

    /**
     * Get the [statut_enveloppe] column value.
     * 
     * @return int
     */
    public function getStatutEnveloppe()
    {

        return $this->statut_enveloppe;
    }

    /**
     * Get the [agent_telechargement] column value.
     * 
     * @return int
     */
    public function getAgentTelechargement()
    {

        return $this->agent_telechargement;
    }

    /**
     * Get the [date_telechargement] column value.
     * 
     * @return string
     */
    public function getDateTelechargement()
    {

        return $this->date_telechargement;
    }

    /**
     * Get the [repertoire_telechargement] column value.
     * 
     * @return string
     */
    public function getRepertoireTelechargement()
    {

        return $this->repertoire_telechargement;
    }

    /**
     * Get the [nom_agent_ouverture] column value.
     * 
     * @return string
     */
    public function getNomAgentOuverture()
    {

        return $this->nom_agent_ouverture;
    }

    /**
     * Get the [dateheure_ouverture_agent2] column value.
     * 
     * @return string
     */
    public function getDateheureOuvertureAgent2()
    {

        return $this->dateheure_ouverture_agent2;
    }

    /**
     * Get the [certificat] column value.
     * 
     * @return string
     */
    public function getCertificat()
    {

        return $this->certificat;
    }

    /**
     * Get the [montant] column value.
     * 
     * @return double
     */
    public function getMontant()
    {

        return $this->montant;
    }

    /**
     * Get the [montant_apres_modification] column value.
     * 
     * @return double
     */
    public function getMontantApresModification()
    {

        return $this->montant_apres_modification;
    }

    /**
     * Get the [type_attributaire] column value.
     * 
     * @return string
     */
    public function getTypeAttributaire()
    {

        return $this->type_attributaire;
    }

    /**
     * Get the [devise] column value.
     * 
     * @return string
     */
    public function getDevise()
    {

        return $this->devise;
    }

    /**
     * Get the [rabais_preference_national] column value.
     * 
     * @return string
     */
    public function getRabaisPreferenceNational()
    {

        return $this->rabais_preference_national;
    }

    /**
     * Get the [type_correction_montant] column value.
     * 
     * @return string
     */
    public function getTypeCorrectionMontant()
    {

        return $this->type_correction_montant;
    }

    /**
     * Set the value of [id_enveloppe_electro] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setIdEnveloppeElectro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_enveloppe_electro !== $v) {
            $this->id_enveloppe_electro = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO;
        }


        return $this;
    } // setIdEnveloppeElectro()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [offre_id] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setOffreId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->offre_id !== $v) {
            $this->offre_id = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::OFFRE_ID;
        }


        return $this;
    } // setOffreId()

    /**
     * Set the value of [champs_optionnels] column.
     * 
     * @param resource $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setChampsOptionnels($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->champs_optionnels = fopen('php://memory', 'r+');
            fwrite($this->champs_optionnels, $v);
            rewind($this->champs_optionnels);
        } else { // it's already a stream
            $this->champs_optionnels = $v;
        }
        $this->modifiedColumns[] = CommonEnveloppePeer::CHAMPS_OPTIONNELS;


        return $this;
    } // setChampsOptionnels()

    /**
     * Set the value of [fichier] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fichier !== $v) {
            $this->fichier = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::FICHIER;
        }


        return $this;
    } // setFichier()

    /**
     * Set the value of [supprime] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setSupprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprime !== $v) {
            $this->supprime = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::SUPPRIME;
        }


        return $this;
    } // setSupprime()

    /**
     * Set the value of [cryptage] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setCryptage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cryptage !== $v) {
            $this->cryptage = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::CRYPTAGE;
        }


        return $this;
    } // setCryptage()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [hash] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hash !== $v) {
            $this->hash = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::HASH;
        }


        return $this;
    } // setHash()

    /**
     * Set the value of [type_env] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setTypeEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_env !== $v) {
            $this->type_env = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::TYPE_ENV;
        }


        return $this;
    } // setTypeEnv()

    /**
     * Set the value of [sous_pli] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setSousPli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sous_pli !== $v) {
            $this->sous_pli = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::SOUS_PLI;
        }


        return $this;
    } // setSousPli()

    /**
     * Set the value of [attribue] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setAttribue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attribue !== $v) {
            $this->attribue = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::ATTRIBUE;
        }


        return $this;
    } // setAttribue()

    /**
     * Set the value of [dateheure_ouverture] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setDateheureOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateheure_ouverture !== $v) {
            $this->dateheure_ouverture = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::DATEHEURE_OUVERTURE;
        }


        return $this;
    } // setDateheureOuverture()

    /**
     * Set the value of [agent_id_ouverture] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setAgentIdOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_id_ouverture !== $v) {
            $this->agent_id_ouverture = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::AGENT_ID_OUVERTURE;
        }


        return $this;
    } // setAgentIdOuverture()

    /**
     * Set the value of [agent_id_ouverture2] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setAgentIdOuverture2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_id_ouverture2 !== $v) {
            $this->agent_id_ouverture2 = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::AGENT_ID_OUVERTURE2;
        }


        return $this;
    } // setAgentIdOuverture2()

    /**
     * Set the value of [donnees_ouverture] column.
     * 
     * @param resource $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setDonneesOuverture($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->donnees_ouverture = fopen('php://memory', 'r+');
            fwrite($this->donnees_ouverture, $v);
            rewind($this->donnees_ouverture);
        } else { // it's already a stream
            $this->donnees_ouverture = $v;
        }
        $this->modifiedColumns[] = CommonEnveloppePeer::DONNEES_OUVERTURE;


        return $this;
    } // setDonneesOuverture()

    /**
     * Set the value of [horodatage_donnees_ouverture] column.
     * 
     * @param resource $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setHorodatageDonneesOuverture($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage_donnees_ouverture = fopen('php://memory', 'r+');
            fwrite($this->horodatage_donnees_ouverture, $v);
            rewind($this->horodatage_donnees_ouverture);
        } else { // it's already a stream
            $this->horodatage_donnees_ouverture = $v;
        }
        $this->modifiedColumns[] = CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE;


        return $this;
    } // setHorodatageDonneesOuverture()

    /**
     * Set the value of [statut_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setStatutEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_enveloppe !== $v) {
            $this->statut_enveloppe = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::STATUT_ENVELOPPE;
        }


        return $this;
    } // setStatutEnveloppe()

    /**
     * Set the value of [agent_telechargement] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setAgentTelechargement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_telechargement !== $v) {
            $this->agent_telechargement = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::AGENT_TELECHARGEMENT;
        }


        return $this;
    } // setAgentTelechargement()

    /**
     * Set the value of [date_telechargement] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setDateTelechargement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_telechargement !== $v) {
            $this->date_telechargement = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::DATE_TELECHARGEMENT;
        }


        return $this;
    } // setDateTelechargement()

    /**
     * Set the value of [repertoire_telechargement] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setRepertoireTelechargement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->repertoire_telechargement !== $v) {
            $this->repertoire_telechargement = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT;
        }


        return $this;
    } // setRepertoireTelechargement()

    /**
     * Set the value of [nom_agent_ouverture] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setNomAgentOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_ouverture !== $v) {
            $this->nom_agent_ouverture = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::NOM_AGENT_OUVERTURE;
        }


        return $this;
    } // setNomAgentOuverture()

    /**
     * Set the value of [dateheure_ouverture_agent2] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setDateheureOuvertureAgent2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateheure_ouverture_agent2 !== $v) {
            $this->dateheure_ouverture_agent2 = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2;
        }


        return $this;
    } // setDateheureOuvertureAgent2()

    /**
     * Set the value of [certificat] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->certificat !== $v) {
            $this->certificat = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::CERTIFICAT;
        }


        return $this;
    } // setCertificat()

    /**
     * Set the value of [montant] column.
     * 
     * @param double $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant !== $v) {
            $this->montant = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::MONTANT;
        }


        return $this;
    } // setMontant()

    /**
     * Set the value of [montant_apres_modification] column.
     * 
     * @param double $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setMontantApresModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_apres_modification !== $v) {
            $this->montant_apres_modification = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::MONTANT_APRES_MODIFICATION;
        }


        return $this;
    } // setMontantApresModification()

    /**
     * Set the value of [type_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setTypeAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_attributaire !== $v) {
            $this->type_attributaire = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::TYPE_ATTRIBUTAIRE;
        }


        return $this;
    } // setTypeAttributaire()

    /**
     * Set the value of [devise] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setDevise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devise !== $v) {
            $this->devise = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::DEVISE;
        }


        return $this;
    } // setDevise()

    /**
     * Set the value of [rabais_preference_national] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setRabaisPreferenceNational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rabais_preference_national !== $v) {
            $this->rabais_preference_national = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL;
        }


        return $this;
    } // setRabaisPreferenceNational()

    /**
     * Set the value of [type_correction_montant] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppe The current object (for fluent API support)
     */
    public function setTypeCorrectionMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_correction_montant !== $v) {
            $this->type_correction_montant = $v;
            $this->modifiedColumns[] = CommonEnveloppePeer::TYPE_CORRECTION_MONTANT;
        }


        return $this;
    } // setTypeCorrectionMontant()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->offre_id !== 0) {
                return false;
            }

            if ($this->fichier !== 0) {
                return false;
            }

            if ($this->supprime !== '0') {
                return false;
            }

            if ($this->cryptage !== '1') {
                return false;
            }

            if ($this->nom_fichier !== '') {
                return false;
            }

            if ($this->hash !== '') {
                return false;
            }

            if ($this->type_env !== 0) {
                return false;
            }

            if ($this->sous_pli !== 0) {
                return false;
            }

            if ($this->attribue !== '0') {
                return false;
            }

            if ($this->dateheure_ouverture !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->statut_enveloppe !== 1) {
                return false;
            }

            if ($this->nom_agent_ouverture !== '') {
                return false;
            }

            if ($this->dateheure_ouverture_agent2 !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->rabais_preference_national !== '0') {
                return false;
            }

            if ($this->type_correction_montant !== '') {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_enveloppe_electro = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->offre_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            if ($row[$startcol + 3] !== null) {
                $this->champs_optionnels = fopen('php://memory', 'r+');
                fwrite($this->champs_optionnels, $row[$startcol + 3]);
                rewind($this->champs_optionnels);
            } else {
                $this->champs_optionnels = null;
            }
            $this->fichier = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->supprime = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->cryptage = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nom_fichier = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->hash = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->type_env = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->sous_pli = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->attribue = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->dateheure_ouverture = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->agent_id_ouverture = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->agent_id_ouverture2 = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            if ($row[$startcol + 15] !== null) {
                $this->donnees_ouverture = fopen('php://memory', 'r+');
                fwrite($this->donnees_ouverture, $row[$startcol + 15]);
                rewind($this->donnees_ouverture);
            } else {
                $this->donnees_ouverture = null;
            }
            if ($row[$startcol + 16] !== null) {
                $this->horodatage_donnees_ouverture = fopen('php://memory', 'r+');
                fwrite($this->horodatage_donnees_ouverture, $row[$startcol + 16]);
                rewind($this->horodatage_donnees_ouverture);
            } else {
                $this->horodatage_donnees_ouverture = null;
            }
            $this->statut_enveloppe = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->agent_telechargement = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_telechargement = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->repertoire_telechargement = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->nom_agent_ouverture = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->dateheure_ouverture_agent2 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->certificat = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->montant = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->montant_apres_modification = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->type_attributaire = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->devise = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->rabais_preference_national = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->type_correction_montant = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 30; // 30 = CommonEnveloppePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEnveloppe object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEnveloppePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEnveloppeQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CommonEnveloppePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                // Rewind the champs_optionnels LOB column, since PDO does not rewind after inserting value.
                if ($this->champs_optionnels !== null && is_resource($this->champs_optionnels)) {
                    rewind($this->champs_optionnels);
                }

                // Rewind the donnees_ouverture LOB column, since PDO does not rewind after inserting value.
                if ($this->donnees_ouverture !== null && is_resource($this->donnees_ouverture)) {
                    rewind($this->donnees_ouverture);
                }

                // Rewind the horodatage_donnees_ouverture LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage_donnees_ouverture !== null && is_resource($this->horodatage_donnees_ouverture)) {
                    rewind($this->horodatage_donnees_ouverture);
                }

                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO;
        if (null !== $this->id_enveloppe_electro) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO)) {
            $modifiedColumns[':p' . $index++]  = '`id_enveloppe_electro`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::OFFRE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`offre_id`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::CHAMPS_OPTIONNELS)) {
            $modifiedColumns[':p' . $index++]  = '`champs_optionnels`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`fichier`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::SUPPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`supprime`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::CRYPTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`cryptage`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::HASH)) {
            $modifiedColumns[':p' . $index++]  = '`hash`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::TYPE_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`type_env`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::SOUS_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`sous_pli`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::ATTRIBUE)) {
            $modifiedColumns[':p' . $index++]  = '`attribue`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::DATEHEURE_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`dateheure_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::AGENT_ID_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`agent_id_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::AGENT_ID_OUVERTURE2)) {
            $modifiedColumns[':p' . $index++]  = '`agent_id_ouverture2`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::DONNEES_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`donnees_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage_donnees_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::STATUT_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_enveloppe`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::AGENT_TELECHARGEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`agent_telechargement`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::DATE_TELECHARGEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`date_telechargement`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`repertoire_telechargement`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::NOM_AGENT_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2)) {
            $modifiedColumns[':p' . $index++]  = '`dateheure_ouverture_agent2`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`certificat`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`montant`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::MONTANT_APRES_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`montant_apres_modification`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::TYPE_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_attributaire`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::DEVISE)) {
            $modifiedColumns[':p' . $index++]  = '`devise`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`rabais_preference_national`';
        }
        if ($this->isColumnModified(CommonEnveloppePeer::TYPE_CORRECTION_MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`type_correction_montant`';
        }

        $sql = sprintf(
            'INSERT INTO `Enveloppe` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_enveloppe_electro`':						
                        $stmt->bindValue($identifier, $this->id_enveloppe_electro, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`offre_id`':						
                        $stmt->bindValue($identifier, $this->offre_id, PDO::PARAM_INT);
                        break;
                    case '`champs_optionnels`':						
                        if (is_resource($this->champs_optionnels)) {
                            rewind($this->champs_optionnels);
                        }
                        $stmt->bindValue($identifier, $this->champs_optionnels, PDO::PARAM_LOB);
                        break;
                    case '`fichier`':						
                        $stmt->bindValue($identifier, $this->fichier, PDO::PARAM_INT);
                        break;
                    case '`supprime`':						
                        $stmt->bindValue($identifier, $this->supprime, PDO::PARAM_STR);
                        break;
                    case '`cryptage`':						
                        $stmt->bindValue($identifier, $this->cryptage, PDO::PARAM_STR);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`hash`':						
                        $stmt->bindValue($identifier, $this->hash, PDO::PARAM_STR);
                        break;
                    case '`type_env`':						
                        $stmt->bindValue($identifier, $this->type_env, PDO::PARAM_INT);
                        break;
                    case '`sous_pli`':						
                        $stmt->bindValue($identifier, $this->sous_pli, PDO::PARAM_INT);
                        break;
                    case '`attribue`':						
                        $stmt->bindValue($identifier, $this->attribue, PDO::PARAM_STR);
                        break;
                    case '`dateheure_ouverture`':						
                        $stmt->bindValue($identifier, $this->dateheure_ouverture, PDO::PARAM_STR);
                        break;
                    case '`agent_id_ouverture`':						
                        $stmt->bindValue($identifier, $this->agent_id_ouverture, PDO::PARAM_INT);
                        break;
                    case '`agent_id_ouverture2`':						
                        $stmt->bindValue($identifier, $this->agent_id_ouverture2, PDO::PARAM_INT);
                        break;
                    case '`donnees_ouverture`':						
                        if (is_resource($this->donnees_ouverture)) {
                            rewind($this->donnees_ouverture);
                        }
                        $stmt->bindValue($identifier, $this->donnees_ouverture, PDO::PARAM_LOB);
                        break;
                    case '`horodatage_donnees_ouverture`':						
                        if (is_resource($this->horodatage_donnees_ouverture)) {
                            rewind($this->horodatage_donnees_ouverture);
                        }
                        $stmt->bindValue($identifier, $this->horodatage_donnees_ouverture, PDO::PARAM_LOB);
                        break;
                    case '`statut_enveloppe`':						
                        $stmt->bindValue($identifier, $this->statut_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`agent_telechargement`':						
                        $stmt->bindValue($identifier, $this->agent_telechargement, PDO::PARAM_INT);
                        break;
                    case '`date_telechargement`':						
                        $stmt->bindValue($identifier, $this->date_telechargement, PDO::PARAM_STR);
                        break;
                    case '`repertoire_telechargement`':						
                        $stmt->bindValue($identifier, $this->repertoire_telechargement, PDO::PARAM_STR);
                        break;
                    case '`nom_agent_ouverture`':						
                        $stmt->bindValue($identifier, $this->nom_agent_ouverture, PDO::PARAM_STR);
                        break;
                    case '`dateheure_ouverture_agent2`':						
                        $stmt->bindValue($identifier, $this->dateheure_ouverture_agent2, PDO::PARAM_STR);
                        break;
                    case '`certificat`':						
                        $stmt->bindValue($identifier, $this->certificat, PDO::PARAM_STR);
                        break;
                    case '`montant`':						
                        $stmt->bindValue($identifier, $this->montant, PDO::PARAM_STR);
                        break;
                    case '`montant_apres_modification`':						
                        $stmt->bindValue($identifier, $this->montant_apres_modification, PDO::PARAM_STR);
                        break;
                    case '`type_attributaire`':						
                        $stmt->bindValue($identifier, $this->type_attributaire, PDO::PARAM_STR);
                        break;
                    case '`devise`':						
                        $stmt->bindValue($identifier, $this->devise, PDO::PARAM_STR);
                        break;
                    case '`rabais_preference_national`':						
                        $stmt->bindValue($identifier, $this->rabais_preference_national, PDO::PARAM_STR);
                        break;
                    case '`type_correction_montant`':						
                        $stmt->bindValue($identifier, $this->type_correction_montant, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdEnveloppeElectro($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = CommonEnveloppePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CommonEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdEnveloppeElectro();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getOffreId();
                break;
            case 3:
                return $this->getChampsOptionnels();
                break;
            case 4:
                return $this->getFichier();
                break;
            case 5:
                return $this->getSupprime();
                break;
            case 6:
                return $this->getCryptage();
                break;
            case 7:
                return $this->getNomFichier();
                break;
            case 8:
                return $this->getHash();
                break;
            case 9:
                return $this->getTypeEnv();
                break;
            case 10:
                return $this->getSousPli();
                break;
            case 11:
                return $this->getAttribue();
                break;
            case 12:
                return $this->getDateheureOuverture();
                break;
            case 13:
                return $this->getAgentIdOuverture();
                break;
            case 14:
                return $this->getAgentIdOuverture2();
                break;
            case 15:
                return $this->getDonneesOuverture();
                break;
            case 16:
                return $this->getHorodatageDonneesOuverture();
                break;
            case 17:
                return $this->getStatutEnveloppe();
                break;
            case 18:
                return $this->getAgentTelechargement();
                break;
            case 19:
                return $this->getDateTelechargement();
                break;
            case 20:
                return $this->getRepertoireTelechargement();
                break;
            case 21:
                return $this->getNomAgentOuverture();
                break;
            case 22:
                return $this->getDateheureOuvertureAgent2();
                break;
            case 23:
                return $this->getCertificat();
                break;
            case 24:
                return $this->getMontant();
                break;
            case 25:
                return $this->getMontantApresModification();
                break;
            case 26:
                return $this->getTypeAttributaire();
                break;
            case 27:
                return $this->getDevise();
                break;
            case 28:
                return $this->getRabaisPreferenceNational();
                break;
            case 29:
                return $this->getTypeCorrectionMontant();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['CommonEnveloppe'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEnveloppe'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEnveloppePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEnveloppeElectro(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getOffreId(),
            $keys[3] => $this->getChampsOptionnels(),
            $keys[4] => $this->getFichier(),
            $keys[5] => $this->getSupprime(),
            $keys[6] => $this->getCryptage(),
            $keys[7] => $this->getNomFichier(),
            $keys[8] => $this->getHash(),
            $keys[9] => $this->getTypeEnv(),
            $keys[10] => $this->getSousPli(),
            $keys[11] => $this->getAttribue(),
            $keys[12] => $this->getDateheureOuverture(),
            $keys[13] => $this->getAgentIdOuverture(),
            $keys[14] => $this->getAgentIdOuverture2(),
            $keys[15] => $this->getDonneesOuverture(),
            $keys[16] => $this->getHorodatageDonneesOuverture(),
            $keys[17] => $this->getStatutEnveloppe(),
            $keys[18] => $this->getAgentTelechargement(),
            $keys[19] => $this->getDateTelechargement(),
            $keys[20] => $this->getRepertoireTelechargement(),
            $keys[21] => $this->getNomAgentOuverture(),
            $keys[22] => $this->getDateheureOuvertureAgent2(),
            $keys[23] => $this->getCertificat(),
            $keys[24] => $this->getMontant(),
            $keys[25] => $this->getMontantApresModification(),
            $keys[26] => $this->getTypeAttributaire(),
            $keys[27] => $this->getDevise(),
            $keys[28] => $this->getRabaisPreferenceNational(),
            $keys[29] => $this->getTypeCorrectionMontant(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CommonEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdEnveloppeElectro($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setOffreId($value);
                break;
            case 3:
                $this->setChampsOptionnels($value);
                break;
            case 4:
                $this->setFichier($value);
                break;
            case 5:
                $this->setSupprime($value);
                break;
            case 6:
                $this->setCryptage($value);
                break;
            case 7:
                $this->setNomFichier($value);
                break;
            case 8:
                $this->setHash($value);
                break;
            case 9:
                $this->setTypeEnv($value);
                break;
            case 10:
                $this->setSousPli($value);
                break;
            case 11:
                $this->setAttribue($value);
                break;
            case 12:
                $this->setDateheureOuverture($value);
                break;
            case 13:
                $this->setAgentIdOuverture($value);
                break;
            case 14:
                $this->setAgentIdOuverture2($value);
                break;
            case 15:
                $this->setDonneesOuverture($value);
                break;
            case 16:
                $this->setHorodatageDonneesOuverture($value);
                break;
            case 17:
                $this->setStatutEnveloppe($value);
                break;
            case 18:
                $this->setAgentTelechargement($value);
                break;
            case 19:
                $this->setDateTelechargement($value);
                break;
            case 20:
                $this->setRepertoireTelechargement($value);
                break;
            case 21:
                $this->setNomAgentOuverture($value);
                break;
            case 22:
                $this->setDateheureOuvertureAgent2($value);
                break;
            case 23:
                $this->setCertificat($value);
                break;
            case 24:
                $this->setMontant($value);
                break;
            case 25:
                $this->setMontantApresModification($value);
                break;
            case 26:
                $this->setTypeAttributaire($value);
                break;
            case 27:
                $this->setDevise($value);
                break;
            case 28:
                $this->setRabaisPreferenceNational($value);
                break;
            case 29:
                $this->setTypeCorrectionMontant($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = CommonEnveloppePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEnveloppeElectro($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOffreId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setChampsOptionnels($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFichier($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSupprime($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCryptage($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomFichier($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHash($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTypeEnv($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSousPli($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAttribue($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateheureOuverture($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAgentIdOuverture($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAgentIdOuverture2($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDonneesOuverture($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setHorodatageDonneesOuverture($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setStatutEnveloppe($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAgentTelechargement($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateTelechargement($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setRepertoireTelechargement($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setNomAgentOuverture($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateheureOuvertureAgent2($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setCertificat($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setMontant($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setMontantApresModification($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setTypeAttributaire($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDevise($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setRabaisPreferenceNational($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTypeCorrectionMontant($arr[$keys[29]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEnveloppePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO)) $criteria->add(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $this->id_enveloppe_electro);
        if ($this->isColumnModified(CommonEnveloppePeer::ORGANISME)) $criteria->add(CommonEnveloppePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEnveloppePeer::OFFRE_ID)) $criteria->add(CommonEnveloppePeer::OFFRE_ID, $this->offre_id);
        if ($this->isColumnModified(CommonEnveloppePeer::CHAMPS_OPTIONNELS)) $criteria->add(CommonEnveloppePeer::CHAMPS_OPTIONNELS, $this->champs_optionnels);
        if ($this->isColumnModified(CommonEnveloppePeer::FICHIER)) $criteria->add(CommonEnveloppePeer::FICHIER, $this->fichier);
        if ($this->isColumnModified(CommonEnveloppePeer::SUPPRIME)) $criteria->add(CommonEnveloppePeer::SUPPRIME, $this->supprime);
        if ($this->isColumnModified(CommonEnveloppePeer::CRYPTAGE)) $criteria->add(CommonEnveloppePeer::CRYPTAGE, $this->cryptage);
        if ($this->isColumnModified(CommonEnveloppePeer::NOM_FICHIER)) $criteria->add(CommonEnveloppePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonEnveloppePeer::HASH)) $criteria->add(CommonEnveloppePeer::HASH, $this->hash);
        if ($this->isColumnModified(CommonEnveloppePeer::TYPE_ENV)) $criteria->add(CommonEnveloppePeer::TYPE_ENV, $this->type_env);
        if ($this->isColumnModified(CommonEnveloppePeer::SOUS_PLI)) $criteria->add(CommonEnveloppePeer::SOUS_PLI, $this->sous_pli);
        if ($this->isColumnModified(CommonEnveloppePeer::ATTRIBUE)) $criteria->add(CommonEnveloppePeer::ATTRIBUE, $this->attribue);
        if ($this->isColumnModified(CommonEnveloppePeer::DATEHEURE_OUVERTURE)) $criteria->add(CommonEnveloppePeer::DATEHEURE_OUVERTURE, $this->dateheure_ouverture);
        if ($this->isColumnModified(CommonEnveloppePeer::AGENT_ID_OUVERTURE)) $criteria->add(CommonEnveloppePeer::AGENT_ID_OUVERTURE, $this->agent_id_ouverture);
        if ($this->isColumnModified(CommonEnveloppePeer::AGENT_ID_OUVERTURE2)) $criteria->add(CommonEnveloppePeer::AGENT_ID_OUVERTURE2, $this->agent_id_ouverture2);
        if ($this->isColumnModified(CommonEnveloppePeer::DONNEES_OUVERTURE)) $criteria->add(CommonEnveloppePeer::DONNEES_OUVERTURE, $this->donnees_ouverture);
        if ($this->isColumnModified(CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE)) $criteria->add(CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE, $this->horodatage_donnees_ouverture);
        if ($this->isColumnModified(CommonEnveloppePeer::STATUT_ENVELOPPE)) $criteria->add(CommonEnveloppePeer::STATUT_ENVELOPPE, $this->statut_enveloppe);
        if ($this->isColumnModified(CommonEnveloppePeer::AGENT_TELECHARGEMENT)) $criteria->add(CommonEnveloppePeer::AGENT_TELECHARGEMENT, $this->agent_telechargement);
        if ($this->isColumnModified(CommonEnveloppePeer::DATE_TELECHARGEMENT)) $criteria->add(CommonEnveloppePeer::DATE_TELECHARGEMENT, $this->date_telechargement);
        if ($this->isColumnModified(CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT)) $criteria->add(CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT, $this->repertoire_telechargement);
        if ($this->isColumnModified(CommonEnveloppePeer::NOM_AGENT_OUVERTURE)) $criteria->add(CommonEnveloppePeer::NOM_AGENT_OUVERTURE, $this->nom_agent_ouverture);
        if ($this->isColumnModified(CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2)) $criteria->add(CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2, $this->dateheure_ouverture_agent2);
        if ($this->isColumnModified(CommonEnveloppePeer::CERTIFICAT)) $criteria->add(CommonEnveloppePeer::CERTIFICAT, $this->certificat);
        if ($this->isColumnModified(CommonEnveloppePeer::MONTANT)) $criteria->add(CommonEnveloppePeer::MONTANT, $this->montant);
        if ($this->isColumnModified(CommonEnveloppePeer::MONTANT_APRES_MODIFICATION)) $criteria->add(CommonEnveloppePeer::MONTANT_APRES_MODIFICATION, $this->montant_apres_modification);
        if ($this->isColumnModified(CommonEnveloppePeer::TYPE_ATTRIBUTAIRE)) $criteria->add(CommonEnveloppePeer::TYPE_ATTRIBUTAIRE, $this->type_attributaire);
        if ($this->isColumnModified(CommonEnveloppePeer::DEVISE)) $criteria->add(CommonEnveloppePeer::DEVISE, $this->devise);
        if ($this->isColumnModified(CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL)) $criteria->add(CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL, $this->rabais_preference_national);
        if ($this->isColumnModified(CommonEnveloppePeer::TYPE_CORRECTION_MONTANT)) $criteria->add(CommonEnveloppePeer::TYPE_CORRECTION_MONTANT, $this->type_correction_montant);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(CommonEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $this->id_enveloppe_electro);
        $criteria->add(CommonEnveloppePeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getIdEnveloppeElectro();
        $pks[1] = $this->getOrganisme();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setIdEnveloppeElectro($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdEnveloppeElectro()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonEnveloppe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setOffreId($this->getOffreId());
        $copyObj->setChampsOptionnels($this->getChampsOptionnels());
        $copyObj->setFichier($this->getFichier());
        $copyObj->setSupprime($this->getSupprime());
        $copyObj->setCryptage($this->getCryptage());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setHash($this->getHash());
        $copyObj->setTypeEnv($this->getTypeEnv());
        $copyObj->setSousPli($this->getSousPli());
        $copyObj->setAttribue($this->getAttribue());
        $copyObj->setDateheureOuverture($this->getDateheureOuverture());
        $copyObj->setAgentIdOuverture($this->getAgentIdOuverture());
        $copyObj->setAgentIdOuverture2($this->getAgentIdOuverture2());
        $copyObj->setDonneesOuverture($this->getDonneesOuverture());
        $copyObj->setHorodatageDonneesOuverture($this->getHorodatageDonneesOuverture());
        $copyObj->setStatutEnveloppe($this->getStatutEnveloppe());
        $copyObj->setAgentTelechargement($this->getAgentTelechargement());
        $copyObj->setDateTelechargement($this->getDateTelechargement());
        $copyObj->setRepertoireTelechargement($this->getRepertoireTelechargement());
        $copyObj->setNomAgentOuverture($this->getNomAgentOuverture());
        $copyObj->setDateheureOuvertureAgent2($this->getDateheureOuvertureAgent2());
        $copyObj->setCertificat($this->getCertificat());
        $copyObj->setMontant($this->getMontant());
        $copyObj->setMontantApresModification($this->getMontantApresModification());
        $copyObj->setTypeAttributaire($this->getTypeAttributaire());
        $copyObj->setDevise($this->getDevise());
        $copyObj->setRabaisPreferenceNational($this->getRabaisPreferenceNational());
        $copyObj->setTypeCorrectionMontant($this->getTypeCorrectionMontant());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEnveloppeElectro(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return CommonEnveloppe Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return CommonEnveloppePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEnveloppePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_enveloppe_electro = null;
        $this->organisme = null;
        $this->offre_id = null;
        $this->champs_optionnels = null;
        $this->fichier = null;
        $this->supprime = null;
        $this->cryptage = null;
        $this->nom_fichier = null;
        $this->hash = null;
        $this->type_env = null;
        $this->sous_pli = null;
        $this->attribue = null;
        $this->dateheure_ouverture = null;
        $this->agent_id_ouverture = null;
        $this->agent_id_ouverture2 = null;
        $this->donnees_ouverture = null;
        $this->horodatage_donnees_ouverture = null;
        $this->statut_enveloppe = null;
        $this->agent_telechargement = null;
        $this->date_telechargement = null;
        $this->repertoire_telechargement = null;
        $this->nom_agent_ouverture = null;
        $this->dateheure_ouverture_agent2 = null;
        $this->certificat = null;
        $this->montant = null;
        $this->montant_apres_modification = null;
        $this->type_attributaire = null;
        $this->devise = null;
        $this->rabais_preference_national = null;
        $this->type_correction_montant = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonEnveloppePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
