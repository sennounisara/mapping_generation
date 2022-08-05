<?php


/**
 * Base class that represents a row from the 'Helios_teletransmission' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHeliosTeletransmission extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonHeliosTeletransmissionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonHeliosTeletransmissionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the shown_id field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $shown_id;

    /**
     * The value for the id_agent_creation field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_agent_creation;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the publicite_cons field.
     * @var        string
     */
    protected $publicite_cons;

    /**
     * The value for the dce_items field.
     * @var        string
     */
    protected $dce_items;

    /**
     * The value for the ids_pvs_cao field.
     * @var        string
     */
    protected $ids_pvs_cao;

    /**
     * The value for the ids_rapports_prefet field.
     * @var        string
     */
    protected $ids_rapports_prefet;

    /**
     * The value for the deliberation_mapa field.
     * @var        string
     */
    protected $deliberation_mapa;

    /**
     * The value for the tableau_ar field.
     * @var        int
     */
    protected $tableau_ar;

    /**
     * The value for the date_creation field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_envoi field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the id_agent_envoi field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_agent_envoi;

    /**
     * The value for the nom_piecej1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_piecej1;

    /**
     * The value for the piecej1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $piecej1;

    /**
     * The value for the horodatage_piecej1 field.
     * @var        resource
     */
    protected $horodatage_piecej1;

    /**
     * The value for the untrusteddate_piecej1 field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $untrusteddate_piecej1;

    /**
     * The value for the taille_piecej1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $taille_piecej1;

    /**
     * The value for the nom_piecej2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_piecej2;

    /**
     * The value for the piecej2 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $piecej2;

    /**
     * The value for the horodatage_piecej2 field.
     * @var        resource
     */
    protected $horodatage_piecej2;

    /**
     * The value for the untrusteddate_piecej2 field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $untrusteddate_piecej2;

    /**
     * The value for the taille_piecej2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $taille_piecej2;

    /**
     * The value for the piecej1_desc field.
     * @var        string
     */
    protected $piecej1_desc;

    /**
     * The value for the piecej2_desc field.
     * @var        string
     */
    protected $piecej2_desc;

    /**
     * The value for the fichier_xml field.
     * @var        resource
     */
    protected $fichier_xml;

    /**
     * The value for the nom_dossierzip field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_dossierzip;

    /**
     * The value for the taille_dossierzip field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $taille_dossierzip;

    /**
     * The value for the objet_libre field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $objet_libre;

    /**
     * The value for the commentaire_libre field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $commentaire_libre;

    /**
     * The value for the sig_piece_principale field.
     * @var        resource
     */
    protected $sig_piece_principale;

    /**
     * The value for the ref_utilisateur field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ref_utilisateur;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

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
        $this->shown_id = '';
        $this->id_agent_creation = 0;
        $this->date_creation = '0000-00-00 00:00:00';
        $this->date_envoi = '0000-00-00 00:00:00';
        $this->id_agent_envoi = 0;
        $this->nom_piecej1 = '';
        $this->piecej1 = 0;
        $this->untrusteddate_piecej1 = '0000-00-00 00:00:00';
        $this->taille_piecej1 = '';
        $this->nom_piecej2 = '';
        $this->piecej2 = 0;
        $this->untrusteddate_piecej2 = '0000-00-00 00:00:00';
        $this->taille_piecej2 = '';
        $this->nom_dossierzip = '';
        $this->taille_dossierzip = '';
        $this->objet_libre = '';
        $this->commentaire_libre = '';
        $this->ref_utilisateur = '';
    }

    /**
     * Initializes internal state of BaseCommonHeliosTeletransmission object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
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
     * Get the [shown_id] column value.
     * 
     * @return string
     */
    public function getShownId()
    {

        return $this->shown_id;
    }

    /**
     * Get the [id_agent_creation] column value.
     * 
     * @return int
     */
    public function getIdAgentCreation()
    {

        return $this->id_agent_creation;
    }

    /**
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [publicite_cons] column value.
     * 
     * @return string
     */
    public function getPubliciteCons()
    {

        return $this->publicite_cons;
    }

    /**
     * Get the [dce_items] column value.
     * 
     * @return string
     */
    public function getDceItems()
    {

        return $this->dce_items;
    }

    /**
     * Get the [ids_pvs_cao] column value.
     * 
     * @return string
     */
    public function getIdsPvsCao()
    {

        return $this->ids_pvs_cao;
    }

    /**
     * Get the [ids_rapports_prefet] column value.
     * 
     * @return string
     */
    public function getIdsRapportsPrefet()
    {

        return $this->ids_rapports_prefet;
    }

    /**
     * Get the [deliberation_mapa] column value.
     * 
     * @return string
     */
    public function getDeliberationMapa()
    {

        return $this->deliberation_mapa;
    }

    /**
     * Get the [tableau_ar] column value.
     * 
     * @return int
     */
    public function getTableauAr()
    {

        return $this->tableau_ar;
    }

    /**
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
    }

    /**
     * Get the [date_envoi] column value.
     * 
     * @return string
     */
    public function getDateEnvoi()
    {

        return $this->date_envoi;
    }

    /**
     * Get the [id_agent_envoi] column value.
     * 
     * @return int
     */
    public function getIdAgentEnvoi()
    {

        return $this->id_agent_envoi;
    }

    /**
     * Get the [nom_piecej1] column value.
     * 
     * @return string
     */
    public function getNomPiecej1()
    {

        return $this->nom_piecej1;
    }

    /**
     * Get the [piecej1] column value.
     * 
     * @return int
     */
    public function getPiecej1()
    {

        return $this->piecej1;
    }

    /**
     * Get the [horodatage_piecej1] column value.
     * 
     * @return resource
     */
    public function getHorodatagePiecej1()
    {

        return $this->horodatage_piecej1;
    }

    /**
     * Get the [untrusteddate_piecej1] column value.
     * 
     * @return string
     */
    public function getUntrusteddatePiecej1()
    {

        return $this->untrusteddate_piecej1;
    }

    /**
     * Get the [taille_piecej1] column value.
     * 
     * @return string
     */
    public function getTaillePiecej1()
    {

        return $this->taille_piecej1;
    }

    /**
     * Get the [nom_piecej2] column value.
     * 
     * @return string
     */
    public function getNomPiecej2()
    {

        return $this->nom_piecej2;
    }

    /**
     * Get the [piecej2] column value.
     * 
     * @return int
     */
    public function getPiecej2()
    {

        return $this->piecej2;
    }

    /**
     * Get the [horodatage_piecej2] column value.
     * 
     * @return resource
     */
    public function getHorodatagePiecej2()
    {

        return $this->horodatage_piecej2;
    }

    /**
     * Get the [untrusteddate_piecej2] column value.
     * 
     * @return string
     */
    public function getUntrusteddatePiecej2()
    {

        return $this->untrusteddate_piecej2;
    }

    /**
     * Get the [taille_piecej2] column value.
     * 
     * @return string
     */
    public function getTaillePiecej2()
    {

        return $this->taille_piecej2;
    }

    /**
     * Get the [piecej1_desc] column value.
     * 
     * @return string
     */
    public function getPiecej1Desc()
    {

        return $this->piecej1_desc;
    }

    /**
     * Get the [piecej2_desc] column value.
     * 
     * @return string
     */
    public function getPiecej2Desc()
    {

        return $this->piecej2_desc;
    }

    /**
     * Get the [fichier_xml] column value.
     * 
     * @return resource
     */
    public function getFichierXml()
    {

        return $this->fichier_xml;
    }

    /**
     * Get the [nom_dossierzip] column value.
     * 
     * @return string
     */
    public function getNomDossierzip()
    {

        return $this->nom_dossierzip;
    }

    /**
     * Get the [taille_dossierzip] column value.
     * 
     * @return string
     */
    public function getTailleDossierzip()
    {

        return $this->taille_dossierzip;
    }

    /**
     * Get the [objet_libre] column value.
     * 
     * @return string
     */
    public function getObjetLibre()
    {

        return $this->objet_libre;
    }

    /**
     * Get the [commentaire_libre] column value.
     * 
     * @return string
     */
    public function getCommentaireLibre()
    {

        return $this->commentaire_libre;
    }

    /**
     * Get the [sig_piece_principale] column value.
     * 
     * @return resource
     */
    public function getSigPiecePrincipale()
    {

        return $this->sig_piece_principale;
    }

    /**
     * Get the [ref_utilisateur] column value.
     * 
     * @return string
     */
    public function getRefUtilisateur()
    {

        return $this->ref_utilisateur;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [shown_id] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setShownId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shown_id !== $v) {
            $this->shown_id = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::SHOWN_ID;
        }


        return $this;
    } // setShownId()

    /**
     * Set the value of [id_agent_creation] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setIdAgentCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_creation !== $v) {
            $this->id_agent_creation = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION;
        }


        return $this;
    } // setIdAgentCreation()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [publicite_cons] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setPubliciteCons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publicite_cons !== $v) {
            $this->publicite_cons = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::PUBLICITE_CONS;
        }


        return $this;
    } // setPubliciteCons()

    /**
     * Set the value of [dce_items] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setDceItems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dce_items !== $v) {
            $this->dce_items = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::DCE_ITEMS;
        }


        return $this;
    } // setDceItems()

    /**
     * Set the value of [ids_pvs_cao] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setIdsPvsCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_pvs_cao !== $v) {
            $this->ids_pvs_cao = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::IDS_PVS_CAO;
        }


        return $this;
    } // setIdsPvsCao()

    /**
     * Set the value of [ids_rapports_prefet] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setIdsRapportsPrefet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_rapports_prefet !== $v) {
            $this->ids_rapports_prefet = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET;
        }


        return $this;
    } // setIdsRapportsPrefet()

    /**
     * Set the value of [deliberation_mapa] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setDeliberationMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->deliberation_mapa !== $v) {
            $this->deliberation_mapa = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA;
        }


        return $this;
    } // setDeliberationMapa()

    /**
     * Set the value of [tableau_ar] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setTableauAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tableau_ar !== $v) {
            $this->tableau_ar = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::TABLEAU_AR;
        }


        return $this;
    } // setTableauAr()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [id_agent_envoi] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setIdAgentEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_envoi !== $v) {
            $this->id_agent_envoi = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI;
        }


        return $this;
    } // setIdAgentEnvoi()

    /**
     * Set the value of [nom_piecej1] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setNomPiecej1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piecej1 !== $v) {
            $this->nom_piecej1 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::NOM_PIECEJ1;
        }


        return $this;
    } // setNomPiecej1()

    /**
     * Set the value of [piecej1] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setPiecej1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->piecej1 !== $v) {
            $this->piecej1 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::PIECEJ1;
        }


        return $this;
    } // setPiecej1()

    /**
     * Set the value of [horodatage_piecej1] column.
     * 
     * @param resource $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setHorodatagePiecej1($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage_piecej1 = fopen('php://memory', 'r+');
            fwrite($this->horodatage_piecej1, $v);
            rewind($this->horodatage_piecej1);
        } else { // it's already a stream
            $this->horodatage_piecej1 = $v;
        }
        $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1;


        return $this;
    } // setHorodatagePiecej1()

    /**
     * Set the value of [untrusteddate_piecej1] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setUntrusteddatePiecej1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrusteddate_piecej1 !== $v) {
            $this->untrusteddate_piecej1 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1;
        }


        return $this;
    } // setUntrusteddatePiecej1()

    /**
     * Set the value of [taille_piecej1] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setTaillePiecej1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_piecej1 !== $v) {
            $this->taille_piecej1 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1;
        }


        return $this;
    } // setTaillePiecej1()

    /**
     * Set the value of [nom_piecej2] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setNomPiecej2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piecej2 !== $v) {
            $this->nom_piecej2 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::NOM_PIECEJ2;
        }


        return $this;
    } // setNomPiecej2()

    /**
     * Set the value of [piecej2] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setPiecej2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->piecej2 !== $v) {
            $this->piecej2 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::PIECEJ2;
        }


        return $this;
    } // setPiecej2()

    /**
     * Set the value of [horodatage_piecej2] column.
     * 
     * @param resource $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setHorodatagePiecej2($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage_piecej2 = fopen('php://memory', 'r+');
            fwrite($this->horodatage_piecej2, $v);
            rewind($this->horodatage_piecej2);
        } else { // it's already a stream
            $this->horodatage_piecej2 = $v;
        }
        $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2;


        return $this;
    } // setHorodatagePiecej2()

    /**
     * Set the value of [untrusteddate_piecej2] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setUntrusteddatePiecej2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrusteddate_piecej2 !== $v) {
            $this->untrusteddate_piecej2 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2;
        }


        return $this;
    } // setUntrusteddatePiecej2()

    /**
     * Set the value of [taille_piecej2] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setTaillePiecej2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_piecej2 !== $v) {
            $this->taille_piecej2 = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2;
        }


        return $this;
    } // setTaillePiecej2()

    /**
     * Set the value of [piecej1_desc] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setPiecej1Desc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->piecej1_desc !== $v) {
            $this->piecej1_desc = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::PIECEJ1_DESC;
        }


        return $this;
    } // setPiecej1Desc()

    /**
     * Set the value of [piecej2_desc] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setPiecej2Desc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->piecej2_desc !== $v) {
            $this->piecej2_desc = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::PIECEJ2_DESC;
        }


        return $this;
    } // setPiecej2Desc()

    /**
     * Set the value of [fichier_xml] column.
     * 
     * @param resource $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setFichierXml($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->fichier_xml = fopen('php://memory', 'r+');
            fwrite($this->fichier_xml, $v);
            rewind($this->fichier_xml);
        } else { // it's already a stream
            $this->fichier_xml = $v;
        }
        $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::FICHIER_XML;


        return $this;
    } // setFichierXml()

    /**
     * Set the value of [nom_dossierzip] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setNomDossierzip($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_dossierzip !== $v) {
            $this->nom_dossierzip = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP;
        }


        return $this;
    } // setNomDossierzip()

    /**
     * Set the value of [taille_dossierzip] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setTailleDossierzip($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_dossierzip !== $v) {
            $this->taille_dossierzip = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP;
        }


        return $this;
    } // setTailleDossierzip()

    /**
     * Set the value of [objet_libre] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setObjetLibre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet_libre !== $v) {
            $this->objet_libre = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::OBJET_LIBRE;
        }


        return $this;
    } // setObjetLibre()

    /**
     * Set the value of [commentaire_libre] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setCommentaireLibre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire_libre !== $v) {
            $this->commentaire_libre = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE;
        }


        return $this;
    } // setCommentaireLibre()

    /**
     * Set the value of [sig_piece_principale] column.
     * 
     * @param resource $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setSigPiecePrincipale($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->sig_piece_principale = fopen('php://memory', 'r+');
            fwrite($this->sig_piece_principale, $v);
            rewind($this->sig_piece_principale);
        } else { // it's already a stream
            $this->sig_piece_principale = $v;
        }
        $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE;


        return $this;
    } // setSigPiecePrincipale()

    /**
     * Set the value of [ref_utilisateur] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     */
    public function setRefUtilisateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ref_utilisateur !== $v) {
            $this->ref_utilisateur = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::REF_UTILISATEUR;
        }


        return $this;
    } // setRefUtilisateur()

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

            if ($this->shown_id !== '') {
                return false;
            }

            if ($this->id_agent_creation !== 0) {
                return false;
            }

            if ($this->date_creation !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->date_envoi !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->id_agent_envoi !== 0) {
                return false;
            }

            if ($this->nom_piecej1 !== '') {
                return false;
            }

            if ($this->piecej1 !== 0) {
                return false;
            }

            if ($this->untrusteddate_piecej1 !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->taille_piecej1 !== '') {
                return false;
            }

            if ($this->nom_piecej2 !== '') {
                return false;
            }

            if ($this->piecej2 !== 0) {
                return false;
            }

            if ($this->untrusteddate_piecej2 !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->taille_piecej2 !== '') {
                return false;
            }

            if ($this->nom_dossierzip !== '') {
                return false;
            }

            if ($this->taille_dossierzip !== '') {
                return false;
            }

            if ($this->objet_libre !== '') {
                return false;
            }

            if ($this->commentaire_libre !== '') {
                return false;
            }

            if ($this->ref_utilisateur !== '') {
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->shown_id = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_agent_creation = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->consultation_ref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->publicite_cons = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->dce_items = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ids_pvs_cao = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ids_rapports_prefet = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->deliberation_mapa = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->tableau_ar = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->date_creation = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_envoi = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->id_agent_envoi = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->nom_piecej1 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->piecej1 = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            if ($row[$startcol + 16] !== null) {
                $this->horodatage_piecej1 = fopen('php://memory', 'r+');
                fwrite($this->horodatage_piecej1, $row[$startcol + 16]);
                rewind($this->horodatage_piecej1);
            } else {
                $this->horodatage_piecej1 = null;
            }
            $this->untrusteddate_piecej1 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->taille_piecej1 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->nom_piecej2 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->piecej2 = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            if ($row[$startcol + 21] !== null) {
                $this->horodatage_piecej2 = fopen('php://memory', 'r+');
                fwrite($this->horodatage_piecej2, $row[$startcol + 21]);
                rewind($this->horodatage_piecej2);
            } else {
                $this->horodatage_piecej2 = null;
            }
            $this->untrusteddate_piecej2 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->taille_piecej2 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->piecej1_desc = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->piecej2_desc = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            if ($row[$startcol + 26] !== null) {
                $this->fichier_xml = fopen('php://memory', 'r+');
                fwrite($this->fichier_xml, $row[$startcol + 26]);
                rewind($this->fichier_xml);
            } else {
                $this->fichier_xml = null;
            }
            $this->nom_dossierzip = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->taille_dossierzip = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->objet_libre = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->commentaire_libre = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            if ($row[$startcol + 31] !== null) {
                $this->sig_piece_principale = fopen('php://memory', 'r+');
                fwrite($this->sig_piece_principale, $row[$startcol + 31]);
                rewind($this->sig_piece_principale);
            } else {
                $this->sig_piece_principale = null;
            }
            $this->ref_utilisateur = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 33; // 33 = CommonHeliosTeletransmissionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonHeliosTeletransmission object", $e);
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

        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->consultation_ref !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
        }
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonHeliosTeletransmissionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonHeliosTeletransmissionQuery::create()
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonHeliosTeletransmissionPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                // Rewind the horodatage_piecej1 LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage_piecej1 !== null && is_resource($this->horodatage_piecej1)) {
                    rewind($this->horodatage_piecej1);
                }

                // Rewind the horodatage_piecej2 LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage_piecej2 !== null && is_resource($this->horodatage_piecej2)) {
                    rewind($this->horodatage_piecej2);
                }

                // Rewind the fichier_xml LOB column, since PDO does not rewind after inserting value.
                if ($this->fichier_xml !== null && is_resource($this->fichier_xml)) {
                    rewind($this->fichier_xml);
                }

                // Rewind the sig_piece_principale LOB column, since PDO does not rewind after inserting value.
                if ($this->sig_piece_principale !== null && is_resource($this->sig_piece_principale)) {
                    rewind($this->sig_piece_principale);
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

        $this->modifiedColumns[] = CommonHeliosTeletransmissionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonHeliosTeletransmissionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::SHOWN_ID)) {
            $modifiedColumns[':p' . $index++]  = '`shown_id`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_creation`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PUBLICITE_CONS)) {
            $modifiedColumns[':p' . $index++]  = '`publicite_cons`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DCE_ITEMS)) {
            $modifiedColumns[':p' . $index++]  = '`dce_items`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::IDS_PVS_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`ids_pvs_cao`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET)) {
            $modifiedColumns[':p' . $index++]  = '`ids_rapports_prefet`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`deliberation_mapa`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TABLEAU_AR)) {
            $modifiedColumns[':p' . $index++]  = '`tableau_ar`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_envoi`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::NOM_PIECEJ1)) {
            $modifiedColumns[':p' . $index++]  = '`nom_piecej1`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ1)) {
            $modifiedColumns[':p' . $index++]  = '`piecej1`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage_piecej1`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate_piecej1`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1)) {
            $modifiedColumns[':p' . $index++]  = '`taille_piecej1`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::NOM_PIECEJ2)) {
            $modifiedColumns[':p' . $index++]  = '`nom_piecej2`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ2)) {
            $modifiedColumns[':p' . $index++]  = '`piecej2`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage_piecej2`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate_piecej2`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2)) {
            $modifiedColumns[':p' . $index++]  = '`taille_piecej2`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ1_DESC)) {
            $modifiedColumns[':p' . $index++]  = '`piecej1_desc`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ2_DESC)) {
            $modifiedColumns[':p' . $index++]  = '`piecej2_desc`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::FICHIER_XML)) {
            $modifiedColumns[':p' . $index++]  = '`fichier_xml`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP)) {
            $modifiedColumns[':p' . $index++]  = '`nom_dossierzip`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP)) {
            $modifiedColumns[':p' . $index++]  = '`taille_dossierzip`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::OBJET_LIBRE)) {
            $modifiedColumns[':p' . $index++]  = '`objet_libre`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire_libre`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE)) {
            $modifiedColumns[':p' . $index++]  = '`sig_piece_principale`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::REF_UTILISATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ref_utilisateur`';
        }

        $sql = sprintf(
            'INSERT INTO `Helios_teletransmission` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`shown_id`':						
                        $stmt->bindValue($identifier, $this->shown_id, PDO::PARAM_STR);
                        break;
                    case '`id_agent_creation`':						
                        $stmt->bindValue($identifier, $this->id_agent_creation, PDO::PARAM_INT);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`publicite_cons`':						
                        $stmt->bindValue($identifier, $this->publicite_cons, PDO::PARAM_STR);
                        break;
                    case '`dce_items`':						
                        $stmt->bindValue($identifier, $this->dce_items, PDO::PARAM_STR);
                        break;
                    case '`ids_pvs_cao`':						
                        $stmt->bindValue($identifier, $this->ids_pvs_cao, PDO::PARAM_STR);
                        break;
                    case '`ids_rapports_prefet`':						
                        $stmt->bindValue($identifier, $this->ids_rapports_prefet, PDO::PARAM_STR);
                        break;
                    case '`deliberation_mapa`':						
                        $stmt->bindValue($identifier, $this->deliberation_mapa, PDO::PARAM_STR);
                        break;
                    case '`tableau_ar`':						
                        $stmt->bindValue($identifier, $this->tableau_ar, PDO::PARAM_INT);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`id_agent_envoi`':						
                        $stmt->bindValue($identifier, $this->id_agent_envoi, PDO::PARAM_INT);
                        break;
                    case '`nom_piecej1`':						
                        $stmt->bindValue($identifier, $this->nom_piecej1, PDO::PARAM_STR);
                        break;
                    case '`piecej1`':						
                        $stmt->bindValue($identifier, $this->piecej1, PDO::PARAM_INT);
                        break;
                    case '`horodatage_piecej1`':						
                        if (is_resource($this->horodatage_piecej1)) {
                            rewind($this->horodatage_piecej1);
                        }
                        $stmt->bindValue($identifier, $this->horodatage_piecej1, PDO::PARAM_LOB);
                        break;
                    case '`untrusteddate_piecej1`':						
                        $stmt->bindValue($identifier, $this->untrusteddate_piecej1, PDO::PARAM_STR);
                        break;
                    case '`taille_piecej1`':						
                        $stmt->bindValue($identifier, $this->taille_piecej1, PDO::PARAM_STR);
                        break;
                    case '`nom_piecej2`':						
                        $stmt->bindValue($identifier, $this->nom_piecej2, PDO::PARAM_STR);
                        break;
                    case '`piecej2`':						
                        $stmt->bindValue($identifier, $this->piecej2, PDO::PARAM_INT);
                        break;
                    case '`horodatage_piecej2`':						
                        if (is_resource($this->horodatage_piecej2)) {
                            rewind($this->horodatage_piecej2);
                        }
                        $stmt->bindValue($identifier, $this->horodatage_piecej2, PDO::PARAM_LOB);
                        break;
                    case '`untrusteddate_piecej2`':						
                        $stmt->bindValue($identifier, $this->untrusteddate_piecej2, PDO::PARAM_STR);
                        break;
                    case '`taille_piecej2`':						
                        $stmt->bindValue($identifier, $this->taille_piecej2, PDO::PARAM_STR);
                        break;
                    case '`piecej1_desc`':						
                        $stmt->bindValue($identifier, $this->piecej1_desc, PDO::PARAM_STR);
                        break;
                    case '`piecej2_desc`':						
                        $stmt->bindValue($identifier, $this->piecej2_desc, PDO::PARAM_STR);
                        break;
                    case '`fichier_xml`':						
                        if (is_resource($this->fichier_xml)) {
                            rewind($this->fichier_xml);
                        }
                        $stmt->bindValue($identifier, $this->fichier_xml, PDO::PARAM_LOB);
                        break;
                    case '`nom_dossierzip`':						
                        $stmt->bindValue($identifier, $this->nom_dossierzip, PDO::PARAM_STR);
                        break;
                    case '`taille_dossierzip`':						
                        $stmt->bindValue($identifier, $this->taille_dossierzip, PDO::PARAM_STR);
                        break;
                    case '`objet_libre`':						
                        $stmt->bindValue($identifier, $this->objet_libre, PDO::PARAM_STR);
                        break;
                    case '`commentaire_libre`':						
                        $stmt->bindValue($identifier, $this->commentaire_libre, PDO::PARAM_STR);
                        break;
                    case '`sig_piece_principale`':						
                        if (is_resource($this->sig_piece_principale)) {
                            rewind($this->sig_piece_principale);
                        }
                        $stmt->bindValue($identifier, $this->sig_piece_principale, PDO::PARAM_LOB);
                        break;
                    case '`ref_utilisateur`':						
                        $stmt->bindValue($identifier, $this->ref_utilisateur, PDO::PARAM_STR);
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
        $this->setId($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonHeliosTeletransmissionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonHeliosTeletransmissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getShownId();
                break;
            case 3:
                return $this->getIdAgentCreation();
                break;
            case 4:
                return $this->getConsultationRef();
                break;
            case 5:
                return $this->getPubliciteCons();
                break;
            case 6:
                return $this->getDceItems();
                break;
            case 7:
                return $this->getIdsPvsCao();
                break;
            case 8:
                return $this->getIdsRapportsPrefet();
                break;
            case 9:
                return $this->getDeliberationMapa();
                break;
            case 10:
                return $this->getTableauAr();
                break;
            case 11:
                return $this->getDateCreation();
                break;
            case 12:
                return $this->getDateEnvoi();
                break;
            case 13:
                return $this->getIdAgentEnvoi();
                break;
            case 14:
                return $this->getNomPiecej1();
                break;
            case 15:
                return $this->getPiecej1();
                break;
            case 16:
                return $this->getHorodatagePiecej1();
                break;
            case 17:
                return $this->getUntrusteddatePiecej1();
                break;
            case 18:
                return $this->getTaillePiecej1();
                break;
            case 19:
                return $this->getNomPiecej2();
                break;
            case 20:
                return $this->getPiecej2();
                break;
            case 21:
                return $this->getHorodatagePiecej2();
                break;
            case 22:
                return $this->getUntrusteddatePiecej2();
                break;
            case 23:
                return $this->getTaillePiecej2();
                break;
            case 24:
                return $this->getPiecej1Desc();
                break;
            case 25:
                return $this->getPiecej2Desc();
                break;
            case 26:
                return $this->getFichierXml();
                break;
            case 27:
                return $this->getNomDossierzip();
                break;
            case 28:
                return $this->getTailleDossierzip();
                break;
            case 29:
                return $this->getObjetLibre();
                break;
            case 30:
                return $this->getCommentaireLibre();
                break;
            case 31:
                return $this->getSigPiecePrincipale();
                break;
            case 32:
                return $this->getRefUtilisateur();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CommonHeliosTeletransmission'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonHeliosTeletransmission'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonHeliosTeletransmissionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getShownId(),
            $keys[3] => $this->getIdAgentCreation(),
            $keys[4] => $this->getConsultationRef(),
            $keys[5] => $this->getPubliciteCons(),
            $keys[6] => $this->getDceItems(),
            $keys[7] => $this->getIdsPvsCao(),
            $keys[8] => $this->getIdsRapportsPrefet(),
            $keys[9] => $this->getDeliberationMapa(),
            $keys[10] => $this->getTableauAr(),
            $keys[11] => $this->getDateCreation(),
            $keys[12] => $this->getDateEnvoi(),
            $keys[13] => $this->getIdAgentEnvoi(),
            $keys[14] => $this->getNomPiecej1(),
            $keys[15] => $this->getPiecej1(),
            $keys[16] => $this->getHorodatagePiecej1(),
            $keys[17] => $this->getUntrusteddatePiecej1(),
            $keys[18] => $this->getTaillePiecej1(),
            $keys[19] => $this->getNomPiecej2(),
            $keys[20] => $this->getPiecej2(),
            $keys[21] => $this->getHorodatagePiecej2(),
            $keys[22] => $this->getUntrusteddatePiecej2(),
            $keys[23] => $this->getTaillePiecej2(),
            $keys[24] => $this->getPiecej1Desc(),
            $keys[25] => $this->getPiecej2Desc(),
            $keys[26] => $this->getFichierXml(),
            $keys[27] => $this->getNomDossierzip(),
            $keys[28] => $this->getTailleDossierzip(),
            $keys[29] => $this->getObjetLibre(),
            $keys[30] => $this->getCommentaireLibre(),
            $keys[31] => $this->getSigPiecePrincipale(),
            $keys[32] => $this->getRefUtilisateur(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

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
        $pos = CommonHeliosTeletransmissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setShownId($value);
                break;
            case 3:
                $this->setIdAgentCreation($value);
                break;
            case 4:
                $this->setConsultationRef($value);
                break;
            case 5:
                $this->setPubliciteCons($value);
                break;
            case 6:
                $this->setDceItems($value);
                break;
            case 7:
                $this->setIdsPvsCao($value);
                break;
            case 8:
                $this->setIdsRapportsPrefet($value);
                break;
            case 9:
                $this->setDeliberationMapa($value);
                break;
            case 10:
                $this->setTableauAr($value);
                break;
            case 11:
                $this->setDateCreation($value);
                break;
            case 12:
                $this->setDateEnvoi($value);
                break;
            case 13:
                $this->setIdAgentEnvoi($value);
                break;
            case 14:
                $this->setNomPiecej1($value);
                break;
            case 15:
                $this->setPiecej1($value);
                break;
            case 16:
                $this->setHorodatagePiecej1($value);
                break;
            case 17:
                $this->setUntrusteddatePiecej1($value);
                break;
            case 18:
                $this->setTaillePiecej1($value);
                break;
            case 19:
                $this->setNomPiecej2($value);
                break;
            case 20:
                $this->setPiecej2($value);
                break;
            case 21:
                $this->setHorodatagePiecej2($value);
                break;
            case 22:
                $this->setUntrusteddatePiecej2($value);
                break;
            case 23:
                $this->setTaillePiecej2($value);
                break;
            case 24:
                $this->setPiecej1Desc($value);
                break;
            case 25:
                $this->setPiecej2Desc($value);
                break;
            case 26:
                $this->setFichierXml($value);
                break;
            case 27:
                $this->setNomDossierzip($value);
                break;
            case 28:
                $this->setTailleDossierzip($value);
                break;
            case 29:
                $this->setObjetLibre($value);
                break;
            case 30:
                $this->setCommentaireLibre($value);
                break;
            case 31:
                $this->setSigPiecePrincipale($value);
                break;
            case 32:
                $this->setRefUtilisateur($value);
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
        $keys = CommonHeliosTeletransmissionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setShownId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdAgentCreation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setConsultationRef($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPubliciteCons($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDceItems($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdsPvsCao($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdsRapportsPrefet($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDeliberationMapa($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTableauAr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateCreation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateEnvoi($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdAgentEnvoi($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNomPiecej1($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPiecej1($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setHorodatagePiecej1($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setUntrusteddatePiecej1($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTaillePiecej1($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNomPiecej2($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPiecej2($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setHorodatagePiecej2($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setUntrusteddatePiecej2($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTaillePiecej2($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setPiecej1Desc($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPiecej2Desc($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFichierXml($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNomDossierzip($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTailleDossierzip($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setObjetLibre($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCommentaireLibre($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSigPiecePrincipale($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setRefUtilisateur($arr[$keys[32]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ID)) $criteria->add(CommonHeliosTeletransmissionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ORGANISME)) $criteria->add(CommonHeliosTeletransmissionPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::SHOWN_ID)) $criteria->add(CommonHeliosTeletransmissionPeer::SHOWN_ID, $this->shown_id);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION)) $criteria->add(CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION, $this->id_agent_creation);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::CONSULTATION_REF)) $criteria->add(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PUBLICITE_CONS)) $criteria->add(CommonHeliosTeletransmissionPeer::PUBLICITE_CONS, $this->publicite_cons);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DCE_ITEMS)) $criteria->add(CommonHeliosTeletransmissionPeer::DCE_ITEMS, $this->dce_items);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::IDS_PVS_CAO)) $criteria->add(CommonHeliosTeletransmissionPeer::IDS_PVS_CAO, $this->ids_pvs_cao);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET)) $criteria->add(CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET, $this->ids_rapports_prefet);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA)) $criteria->add(CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA, $this->deliberation_mapa);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TABLEAU_AR)) $criteria->add(CommonHeliosTeletransmissionPeer::TABLEAU_AR, $this->tableau_ar);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DATE_CREATION)) $criteria->add(CommonHeliosTeletransmissionPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::DATE_ENVOI)) $criteria->add(CommonHeliosTeletransmissionPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI)) $criteria->add(CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI, $this->id_agent_envoi);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::NOM_PIECEJ1)) $criteria->add(CommonHeliosTeletransmissionPeer::NOM_PIECEJ1, $this->nom_piecej1);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ1)) $criteria->add(CommonHeliosTeletransmissionPeer::PIECEJ1, $this->piecej1);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1)) $criteria->add(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1, $this->horodatage_piecej1);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1)) $criteria->add(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1, $this->untrusteddate_piecej1);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1)) $criteria->add(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1, $this->taille_piecej1);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::NOM_PIECEJ2)) $criteria->add(CommonHeliosTeletransmissionPeer::NOM_PIECEJ2, $this->nom_piecej2);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ2)) $criteria->add(CommonHeliosTeletransmissionPeer::PIECEJ2, $this->piecej2);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2)) $criteria->add(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2, $this->horodatage_piecej2);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2)) $criteria->add(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2, $this->untrusteddate_piecej2);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2)) $criteria->add(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2, $this->taille_piecej2);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ1_DESC)) $criteria->add(CommonHeliosTeletransmissionPeer::PIECEJ1_DESC, $this->piecej1_desc);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::PIECEJ2_DESC)) $criteria->add(CommonHeliosTeletransmissionPeer::PIECEJ2_DESC, $this->piecej2_desc);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::FICHIER_XML)) $criteria->add(CommonHeliosTeletransmissionPeer::FICHIER_XML, $this->fichier_xml);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP)) $criteria->add(CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP, $this->nom_dossierzip);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP)) $criteria->add(CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP, $this->taille_dossierzip);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::OBJET_LIBRE)) $criteria->add(CommonHeliosTeletransmissionPeer::OBJET_LIBRE, $this->objet_libre);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE)) $criteria->add(CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE, $this->commentaire_libre);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE)) $criteria->add(CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE, $this->sig_piece_principale);
        if ($this->isColumnModified(CommonHeliosTeletransmissionPeer::REF_UTILISATEUR)) $criteria->add(CommonHeliosTeletransmissionPeer::REF_UTILISATEUR, $this->ref_utilisateur);

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
        $criteria = new Criteria(CommonHeliosTeletransmissionPeer::DATABASE_NAME);
        $criteria->add(CommonHeliosTeletransmissionPeer::ID, $this->id);
        $criteria->add(CommonHeliosTeletransmissionPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getId();
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
        $this->setId($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonHeliosTeletransmission (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setShownId($this->getShownId());
        $copyObj->setIdAgentCreation($this->getIdAgentCreation());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setPubliciteCons($this->getPubliciteCons());
        $copyObj->setDceItems($this->getDceItems());
        $copyObj->setIdsPvsCao($this->getIdsPvsCao());
        $copyObj->setIdsRapportsPrefet($this->getIdsRapportsPrefet());
        $copyObj->setDeliberationMapa($this->getDeliberationMapa());
        $copyObj->setTableauAr($this->getTableauAr());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setIdAgentEnvoi($this->getIdAgentEnvoi());
        $copyObj->setNomPiecej1($this->getNomPiecej1());
        $copyObj->setPiecej1($this->getPiecej1());
        $copyObj->setHorodatagePiecej1($this->getHorodatagePiecej1());
        $copyObj->setUntrusteddatePiecej1($this->getUntrusteddatePiecej1());
        $copyObj->setTaillePiecej1($this->getTaillePiecej1());
        $copyObj->setNomPiecej2($this->getNomPiecej2());
        $copyObj->setPiecej2($this->getPiecej2());
        $copyObj->setHorodatagePiecej2($this->getHorodatagePiecej2());
        $copyObj->setUntrusteddatePiecej2($this->getUntrusteddatePiecej2());
        $copyObj->setTaillePiecej2($this->getTaillePiecej2());
        $copyObj->setPiecej1Desc($this->getPiecej1Desc());
        $copyObj->setPiecej2Desc($this->getPiecej2Desc());
        $copyObj->setFichierXml($this->getFichierXml());
        $copyObj->setNomDossierzip($this->getNomDossierzip());
        $copyObj->setTailleDossierzip($this->getTailleDossierzip());
        $copyObj->setObjetLibre($this->getObjetLibre());
        $copyObj->setCommentaireLibre($this->getCommentaireLibre());
        $copyObj->setSigPiecePrincipale($this->getSigPiecePrincipale());
        $copyObj->setRefUtilisateur($this->getRefUtilisateur());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonHeliosTeletransmission Clone of current object.
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
     * @return CommonHeliosTeletransmissionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonHeliosTeletransmissionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonHeliosTeletransmission The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonHeliosTeletransmission($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonHeliosTeletransmissions($this);
             */
        }

        return $this->aCommonConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->shown_id = null;
        $this->id_agent_creation = null;
        $this->consultation_ref = null;
        $this->publicite_cons = null;
        $this->dce_items = null;
        $this->ids_pvs_cao = null;
        $this->ids_rapports_prefet = null;
        $this->deliberation_mapa = null;
        $this->tableau_ar = null;
        $this->date_creation = null;
        $this->date_envoi = null;
        $this->id_agent_envoi = null;
        $this->nom_piecej1 = null;
        $this->piecej1 = null;
        $this->horodatage_piecej1 = null;
        $this->untrusteddate_piecej1 = null;
        $this->taille_piecej1 = null;
        $this->nom_piecej2 = null;
        $this->piecej2 = null;
        $this->horodatage_piecej2 = null;
        $this->untrusteddate_piecej2 = null;
        $this->taille_piecej2 = null;
        $this->piecej1_desc = null;
        $this->piecej2_desc = null;
        $this->fichier_xml = null;
        $this->nom_dossierzip = null;
        $this->taille_dossierzip = null;
        $this->objet_libre = null;
        $this->commentaire_libre = null;
        $this->sig_piece_principale = null;
        $this->ref_utilisateur = null;
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
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonHeliosTeletransmissionPeer::DEFAULT_STRING_FORMAT);
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
