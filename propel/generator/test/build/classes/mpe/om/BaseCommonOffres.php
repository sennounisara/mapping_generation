<?php


/**
 * Base class that represents a row from the 'Offres' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonOffres extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonOffresPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonOffresPeer
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
     * The value for the consultation_ref field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the entreprise_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $entreprise_id;

    /**
     * The value for the inscrit_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inscrit_id;

    /**
     * The value for the signatureenvxml field.
     * @var        resource
     */
    protected $signatureenvxml;

    /**
     * The value for the horodatage field.
     * @var        resource
     */
    protected $horodatage;

    /**
     * The value for the mailsignataire field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mailsignataire;

    /**
     * The value for the untrusteddate field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $untrusteddate;

    /**
     * The value for the untrustedserial field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $untrustedserial;

    /**
     * The value for the envoi_complet field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $envoi_complet;

    /**
     * The value for the date_depot_differe field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date_depot_differe;

    /**
     * The value for the horodatage_envoi_differe field.
     * @var        resource
     */
    protected $horodatage_envoi_differe;

    /**
     * The value for the signatureenvxml_envoi_differe field.
     * @var        resource
     */
    protected $signatureenvxml_envoi_differe;

    /**
     * The value for the external_serial field.
     * @var        string
     */
    protected $external_serial;

    /**
     * The value for the internal_serial field.
     * @var        string
     */
    protected $internal_serial;

    /**
     * The value for the uid_offre field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $uid_offre;

    /**
     * The value for the offre_selectionnee field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $offre_selectionnee;

    /**
     * The value for the observation field.
     * @var        string
     */
    protected $observation;

    /**
     * The value for the xml_string field.
     * @var        string
     */
    protected $xml_string;

    /**
     * The value for the nom_entreprise_inscrit field.
     * @var        string
     */
    protected $nom_entreprise_inscrit;

    /**
     * The value for the nom_inscrit field.
     * @var        string
     */
    protected $nom_inscrit;

    /**
     * The value for the prenom_inscrit field.
     * @var        string
     */
    protected $prenom_inscrit;

    /**
     * The value for the adresse_inscrit field.
     * @var        string
     */
    protected $adresse_inscrit;

    /**
     * The value for the adresse2_inscrit field.
     * @var        string
     */
    protected $adresse2_inscrit;

    /**
     * The value for the telephone_inscrit field.
     * @var        string
     */
    protected $telephone_inscrit;

    /**
     * The value for the fax_inscrit field.
     * @var        string
     */
    protected $fax_inscrit;

    /**
     * The value for the code_postal_inscrit field.
     * @var        string
     */
    protected $code_postal_inscrit;

    /**
     * The value for the ville_inscrit field.
     * @var        string
     */
    protected $ville_inscrit;

    /**
     * The value for the pays_inscrit field.
     * @var        string
     */
    protected $pays_inscrit;

    /**
     * The value for the acronyme_pays field.
     * @var        string
     */
    protected $acronyme_pays;

    /**
     * The value for the siret_entreprise field.
     * @var        string
     */
    protected $siret_entreprise;

    /**
     * The value for the identifiant_national field.
     * @var        string
     */
    protected $identifiant_national;

    /**
     * The value for the email_inscrit field.
     * @var        string
     */
    protected $email_inscrit;

    /**
     * The value for the siret_inscrit field.
     * @var        string
     */
    protected $siret_inscrit;

    /**
     * The value for the nom_entreprise field.
     * @var        string
     */
    protected $nom_entreprise;

    /**
     * The value for the horodatage_annulation field.
     * @var        resource
     */
    protected $horodatage_annulation;

    /**
     * The value for the date_annulation field.
     * @var        string
     */
    protected $date_annulation;

    /**
     * The value for the signature_annulation field.
     * @var        string
     */
    protected $signature_annulation;

    /**
     * The value for the depot_annule field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $depot_annule;

    /**
     * The value for the string_annulation field.
     * @var        string
     */
    protected $string_annulation;

    /**
     * The value for the verification_certificat_annulation field.
     * @var        string
     */
    protected $verification_certificat_annulation;

    /**
     * The value for the offre_variante field.
     * @var        string
     */
    protected $offre_variante;

    /**
     * The value for the reponse_pas_a_pas field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reponse_pas_a_pas;

    /**
     * The value for the numero_reponse field.
     * @var        int
     */
    protected $numero_reponse;

    /**
     * The value for the statut_offres field.
     * @var        int
     */
    protected $statut_offres;

    /**
     * The value for the date_heure_ouverture field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_heure_ouverture;

    /**
     * The value for the agentid_ouverture field.
     * @var        int
     */
    protected $agentid_ouverture;

    /**
     * The value for the agentid_ouverture2 field.
     * @var        int
     */
    protected $agentid_ouverture2;

    /**
     * The value for the date_heure_ouverture_agent2 field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_heure_ouverture_agent2;

    /**
     * The value for the cryptage_reponse field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $cryptage_reponse;

    /**
     * The value for the nom_agent_ouverture field.
     * @var        string
     */
    protected $nom_agent_ouverture;

    /**
     * The value for the agent_telechargement_offre field.
     * @var        int
     */
    protected $agent_telechargement_offre;

    /**
     * The value for the date_telechargement_offre field.
     * @var        string
     */
    protected $date_telechargement_offre;

    /**
     * The value for the repertoire_telechargement_offre field.
     * @var        string
     */
    protected $repertoire_telechargement_offre;

    /**
     * The value for the ifu_entreprise field.
     * @var        string
     */
    protected $ifu_entreprise;

    /**
     * The value for the type_entreprise field.
     * @var        string
     */
    protected $type_entreprise;

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
        $this->consultation_ref = 0;
        $this->entreprise_id = 0;
        $this->inscrit_id = 0;
        $this->mailsignataire = '';
        $this->untrusteddate = NULL;
        $this->untrustedserial = '';
        $this->envoi_complet = '';
        $this->date_depot_differe = NULL;
        $this->uid_offre = '';
        $this->offre_selectionnee = 0;
        $this->depot_annule = '0';
        $this->reponse_pas_a_pas = '0';
        $this->date_heure_ouverture = '0000-00-00 00:00:00';
        $this->date_heure_ouverture_agent2 = '0000-00-00 00:00:00';
        $this->cryptage_reponse = '1';
    }

    /**
     * Initializes internal state of BaseCommonOffres object.
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [entreprise_id] column value.
     * 
     * @return int
     */
    public function getEntrepriseId()
    {

        return $this->entreprise_id;
    }

    /**
     * Get the [inscrit_id] column value.
     * 
     * @return int
     */
    public function getInscritId()
    {

        return $this->inscrit_id;
    }

    /**
     * Get the [signatureenvxml] column value.
     * 
     * @return resource
     */
    public function getSignatureenvxml()
    {

        return $this->signatureenvxml;
    }

    /**
     * Get the [horodatage] column value.
     * 
     * @return resource
     */
    public function getHorodatage()
    {

        return $this->horodatage;
    }

    /**
     * Get the [mailsignataire] column value.
     * 
     * @return string
     */
    public function getMailsignataire()
    {

        return $this->mailsignataire;
    }

    /**
     * Get the [optionally formatted] temporal [untrusteddate] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUntrusteddate($format = 'Y-m-d H:i:s')
    {
        if ($this->untrusteddate === null) {
            return null;
        }

        if ($this->untrusteddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->untrusteddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->untrusteddate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [untrustedserial] column value.
     * 
     * @return string
     */
    public function getUntrustedserial()
    {

        return $this->untrustedserial;
    }

    /**
     * Get the [envoi_complet] column value.
     * 
     * @return string
     */
    public function getEnvoiComplet()
    {

        return $this->envoi_complet;
    }

    /**
     * Get the [optionally formatted] temporal [date_depot_differe] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDepotDiffere($format = 'Y-m-d H:i:s')
    {
        if ($this->date_depot_differe === null) {
            return null;
        }

        if ($this->date_depot_differe === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_depot_differe);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_depot_differe, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [horodatage_envoi_differe] column value.
     * 
     * @return resource
     */
    public function getHorodatageEnvoiDiffere()
    {

        return $this->horodatage_envoi_differe;
    }

    /**
     * Get the [signatureenvxml_envoi_differe] column value.
     * 
     * @return resource
     */
    public function getSignatureenvxmlEnvoiDiffere()
    {

        return $this->signatureenvxml_envoi_differe;
    }

    /**
     * Get the [external_serial] column value.
     * 
     * @return string
     */
    public function getExternalSerial()
    {

        return $this->external_serial;
    }

    /**
     * Get the [internal_serial] column value.
     * 
     * @return string
     */
    public function getInternalSerial()
    {

        return $this->internal_serial;
    }

    /**
     * Get the [uid_offre] column value.
     * 
     * @return string
     */
    public function getUidOffre()
    {

        return $this->uid_offre;
    }

    /**
     * Get the [offre_selectionnee] column value.
     * 
     * @return int
     */
    public function getOffreSelectionnee()
    {

        return $this->offre_selectionnee;
    }

    /**
     * Get the [observation] column value.
     * 
     * @return string
     */
    public function getObservation()
    {

        return $this->observation;
    }

    /**
     * Get the [xml_string] column value.
     * 
     * @return string
     */
    public function getXmlString()
    {

        return $this->xml_string;
    }

    /**
     * Get the [nom_entreprise_inscrit] column value.
     * 
     * @return string
     */
    public function getNomEntrepriseInscrit()
    {

        return $this->nom_entreprise_inscrit;
    }

    /**
     * Get the [nom_inscrit] column value.
     * 
     * @return string
     */
    public function getNomInscrit()
    {

        return $this->nom_inscrit;
    }

    /**
     * Get the [prenom_inscrit] column value.
     * 
     * @return string
     */
    public function getPrenomInscrit()
    {

        return $this->prenom_inscrit;
    }

    /**
     * Get the [adresse_inscrit] column value.
     * 
     * @return string
     */
    public function getAdresseInscrit()
    {

        return $this->adresse_inscrit;
    }

    /**
     * Get the [adresse2_inscrit] column value.
     * 
     * @return string
     */
    public function getAdresse2Inscrit()
    {

        return $this->adresse2_inscrit;
    }

    /**
     * Get the [telephone_inscrit] column value.
     * 
     * @return string
     */
    public function getTelephoneInscrit()
    {

        return $this->telephone_inscrit;
    }

    /**
     * Get the [fax_inscrit] column value.
     * 
     * @return string
     */
    public function getFaxInscrit()
    {

        return $this->fax_inscrit;
    }

    /**
     * Get the [code_postal_inscrit] column value.
     * 
     * @return string
     */
    public function getCodePostalInscrit()
    {

        return $this->code_postal_inscrit;
    }

    /**
     * Get the [ville_inscrit] column value.
     * 
     * @return string
     */
    public function getVilleInscrit()
    {

        return $this->ville_inscrit;
    }

    /**
     * Get the [pays_inscrit] column value.
     * 
     * @return string
     */
    public function getPaysInscrit()
    {

        return $this->pays_inscrit;
    }

    /**
     * Get the [acronyme_pays] column value.
     * 
     * @return string
     */
    public function getAcronymePays()
    {

        return $this->acronyme_pays;
    }

    /**
     * Get the [siret_entreprise] column value.
     * 
     * @return string
     */
    public function getSiretEntreprise()
    {

        return $this->siret_entreprise;
    }

    /**
     * Get the [identifiant_national] column value.
     * 
     * @return string
     */
    public function getIdentifiantNational()
    {

        return $this->identifiant_national;
    }

    /**
     * Get the [email_inscrit] column value.
     * 
     * @return string
     */
    public function getEmailInscrit()
    {

        return $this->email_inscrit;
    }

    /**
     * Get the [siret_inscrit] column value.
     * 
     * @return string
     */
    public function getSiretInscrit()
    {

        return $this->siret_inscrit;
    }

    /**
     * Get the [nom_entreprise] column value.
     * 
     * @return string
     */
    public function getNomEntreprise()
    {

        return $this->nom_entreprise;
    }

    /**
     * Get the [horodatage_annulation] column value.
     * 
     * @return resource
     */
    public function getHorodatageAnnulation()
    {

        return $this->horodatage_annulation;
    }

    /**
     * Get the [date_annulation] column value.
     * 
     * @return string
     */
    public function getDateAnnulation()
    {

        return $this->date_annulation;
    }

    /**
     * Get the [signature_annulation] column value.
     * 
     * @return string
     */
    public function getSignatureAnnulation()
    {

        return $this->signature_annulation;
    }

    /**
     * Get the [depot_annule] column value.
     * 
     * @return string
     */
    public function getDepotAnnule()
    {

        return $this->depot_annule;
    }

    /**
     * Get the [string_annulation] column value.
     * 
     * @return string
     */
    public function getStringAnnulation()
    {

        return $this->string_annulation;
    }

    /**
     * Get the [verification_certificat_annulation] column value.
     * 
     * @return string
     */
    public function getVerificationCertificatAnnulation()
    {

        return $this->verification_certificat_annulation;
    }

    /**
     * Get the [offre_variante] column value.
     * 
     * @return string
     */
    public function getOffreVariante()
    {

        return $this->offre_variante;
    }

    /**
     * Get the [reponse_pas_a_pas] column value.
     * 
     * @return string
     */
    public function getReponsePasAPas()
    {

        return $this->reponse_pas_a_pas;
    }

    /**
     * Get the [numero_reponse] column value.
     * 
     * @return int
     */
    public function getNumeroReponse()
    {

        return $this->numero_reponse;
    }

    /**
     * Get the [statut_offres] column value.
     * 
     * @return int
     */
    public function getStatutOffres()
    {

        return $this->statut_offres;
    }

    /**
     * Get the [date_heure_ouverture] column value.
     * 
     * @return string
     */
    public function getDateHeureOuverture()
    {

        return $this->date_heure_ouverture;
    }

    /**
     * Get the [agentid_ouverture] column value.
     * 
     * @return int
     */
    public function getAgentidOuverture()
    {

        return $this->agentid_ouverture;
    }

    /**
     * Get the [agentid_ouverture2] column value.
     * 
     * @return int
     */
    public function getAgentidOuverture2()
    {

        return $this->agentid_ouverture2;
    }

    /**
     * Get the [date_heure_ouverture_agent2] column value.
     * 
     * @return string
     */
    public function getDateHeureOuvertureAgent2()
    {

        return $this->date_heure_ouverture_agent2;
    }

    /**
     * Get the [cryptage_reponse] column value.
     * 
     * @return string
     */
    public function getCryptageReponse()
    {

        return $this->cryptage_reponse;
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
     * Get the [agent_telechargement_offre] column value.
     * 
     * @return int
     */
    public function getAgentTelechargementOffre()
    {

        return $this->agent_telechargement_offre;
    }

    /**
     * Get the [date_telechargement_offre] column value.
     * 
     * @return string
     */
    public function getDateTelechargementOffre()
    {

        return $this->date_telechargement_offre;
    }

    /**
     * Get the [repertoire_telechargement_offre] column value.
     * 
     * @return string
     */
    public function getRepertoireTelechargementOffre()
    {

        return $this->repertoire_telechargement_offre;
    }

    /**
     * Get the [ifu_entreprise] column value.
     * 
     * @return string
     */
    public function getIfuEntreprise()
    {

        return $this->ifu_entreprise;
    }

    /**
     * Get the [type_entreprise] column value.
     * 
     * @return string
     */
    public function getTypeEntreprise()
    {

        return $this->type_entreprise;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonOffresPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonOffresPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonOffresPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [entreprise_id] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setEntrepriseId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entreprise_id !== $v) {
            $this->entreprise_id = $v;
            $this->modifiedColumns[] = CommonOffresPeer::ENTREPRISE_ID;
        }


        return $this;
    } // setEntrepriseId()

    /**
     * Set the value of [inscrit_id] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setInscritId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->inscrit_id !== $v) {
            $this->inscrit_id = $v;
            $this->modifiedColumns[] = CommonOffresPeer::INSCRIT_ID;
        }


        return $this;
    } // setInscritId()

    /**
     * Set the value of [signatureenvxml] column.
     * 
     * @param resource $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setSignatureenvxml($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->signatureenvxml = fopen('php://memory', 'r+');
            fwrite($this->signatureenvxml, $v);
            rewind($this->signatureenvxml);
        } else { // it's already a stream
            $this->signatureenvxml = $v;
        }
        $this->modifiedColumns[] = CommonOffresPeer::SIGNATUREENVXML;


        return $this;
    } // setSignatureenvxml()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param resource $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setHorodatage($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage = fopen('php://memory', 'r+');
            fwrite($this->horodatage, $v);
            rewind($this->horodatage);
        } else { // it's already a stream
            $this->horodatage = $v;
        }
        $this->modifiedColumns[] = CommonOffresPeer::HORODATAGE;


        return $this;
    } // setHorodatage()

    /**
     * Set the value of [mailsignataire] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setMailsignataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mailsignataire !== $v) {
            $this->mailsignataire = $v;
            $this->modifiedColumns[] = CommonOffresPeer::MAILSIGNATAIRE;
        }


        return $this;
    } // setMailsignataire()

    /**
     * Sets the value of [untrusteddate] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setUntrusteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->untrusteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->untrusteddate !== null && $tmpDt = new DateTime($this->untrusteddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->untrusteddate = $newDateAsString;
                $this->modifiedColumns[] = CommonOffresPeer::UNTRUSTEDDATE;
            }
        } // if either are not null


        return $this;
    } // setUntrusteddate()

    /**
     * Set the value of [untrustedserial] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setUntrustedserial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrustedserial !== $v) {
            $this->untrustedserial = $v;
            $this->modifiedColumns[] = CommonOffresPeer::UNTRUSTEDSERIAL;
        }


        return $this;
    } // setUntrustedserial()

    /**
     * Set the value of [envoi_complet] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setEnvoiComplet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoi_complet !== $v) {
            $this->envoi_complet = $v;
            $this->modifiedColumns[] = CommonOffresPeer::ENVOI_COMPLET;
        }


        return $this;
    } // setEnvoiComplet()

    /**
     * Sets the value of [date_depot_differe] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setDateDepotDiffere($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot_differe !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot_differe !== null && $tmpDt = new DateTime($this->date_depot_differe)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->date_depot_differe = $newDateAsString;
                $this->modifiedColumns[] = CommonOffresPeer::DATE_DEPOT_DIFFERE;
            }
        } // if either are not null


        return $this;
    } // setDateDepotDiffere()

    /**
     * Set the value of [horodatage_envoi_differe] column.
     * 
     * @param resource $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setHorodatageEnvoiDiffere($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage_envoi_differe = fopen('php://memory', 'r+');
            fwrite($this->horodatage_envoi_differe, $v);
            rewind($this->horodatage_envoi_differe);
        } else { // it's already a stream
            $this->horodatage_envoi_differe = $v;
        }
        $this->modifiedColumns[] = CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE;


        return $this;
    } // setHorodatageEnvoiDiffere()

    /**
     * Set the value of [signatureenvxml_envoi_differe] column.
     * 
     * @param resource $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setSignatureenvxmlEnvoiDiffere($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->signatureenvxml_envoi_differe = fopen('php://memory', 'r+');
            fwrite($this->signatureenvxml_envoi_differe, $v);
            rewind($this->signatureenvxml_envoi_differe);
        } else { // it's already a stream
            $this->signatureenvxml_envoi_differe = $v;
        }
        $this->modifiedColumns[] = CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE;


        return $this;
    } // setSignatureenvxmlEnvoiDiffere()

    /**
     * Set the value of [external_serial] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setExternalSerial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->external_serial !== $v) {
            $this->external_serial = $v;
            $this->modifiedColumns[] = CommonOffresPeer::EXTERNAL_SERIAL;
        }


        return $this;
    } // setExternalSerial()

    /**
     * Set the value of [internal_serial] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setInternalSerial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->internal_serial !== $v) {
            $this->internal_serial = $v;
            $this->modifiedColumns[] = CommonOffresPeer::INTERNAL_SERIAL;
        }


        return $this;
    } // setInternalSerial()

    /**
     * Set the value of [uid_offre] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setUidOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->uid_offre !== $v) {
            $this->uid_offre = $v;
            $this->modifiedColumns[] = CommonOffresPeer::UID_OFFRE;
        }


        return $this;
    } // setUidOffre()

    /**
     * Set the value of [offre_selectionnee] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setOffreSelectionnee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->offre_selectionnee !== $v) {
            $this->offre_selectionnee = $v;
            $this->modifiedColumns[] = CommonOffresPeer::OFFRE_SELECTIONNEE;
        }


        return $this;
    } // setOffreSelectionnee()

    /**
     * Set the value of [observation] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setObservation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->observation !== $v) {
            $this->observation = $v;
            $this->modifiedColumns[] = CommonOffresPeer::OBSERVATION;
        }


        return $this;
    } // setObservation()

    /**
     * Set the value of [xml_string] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setXmlString($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->xml_string !== $v) {
            $this->xml_string = $v;
            $this->modifiedColumns[] = CommonOffresPeer::XML_STRING;
        }


        return $this;
    } // setXmlString()

    /**
     * Set the value of [nom_entreprise_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setNomEntrepriseInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entreprise_inscrit !== $v) {
            $this->nom_entreprise_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::NOM_ENTREPRISE_INSCRIT;
        }


        return $this;
    } // setNomEntrepriseInscrit()

    /**
     * Set the value of [nom_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setNomInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_inscrit !== $v) {
            $this->nom_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::NOM_INSCRIT;
        }


        return $this;
    } // setNomInscrit()

    /**
     * Set the value of [prenom_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setPrenomInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_inscrit !== $v) {
            $this->prenom_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::PRENOM_INSCRIT;
        }


        return $this;
    } // setPrenomInscrit()

    /**
     * Set the value of [adresse_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setAdresseInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_inscrit !== $v) {
            $this->adresse_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::ADRESSE_INSCRIT;
        }


        return $this;
    } // setAdresseInscrit()

    /**
     * Set the value of [adresse2_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setAdresse2Inscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_inscrit !== $v) {
            $this->adresse2_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::ADRESSE2_INSCRIT;
        }


        return $this;
    } // setAdresse2Inscrit()

    /**
     * Set the value of [telephone_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setTelephoneInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone_inscrit !== $v) {
            $this->telephone_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::TELEPHONE_INSCRIT;
        }


        return $this;
    } // setTelephoneInscrit()

    /**
     * Set the value of [fax_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setFaxInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax_inscrit !== $v) {
            $this->fax_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::FAX_INSCRIT;
        }


        return $this;
    } // setFaxInscrit()

    /**
     * Set the value of [code_postal_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setCodePostalInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal_inscrit !== $v) {
            $this->code_postal_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::CODE_POSTAL_INSCRIT;
        }


        return $this;
    } // setCodePostalInscrit()

    /**
     * Set the value of [ville_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setVilleInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_inscrit !== $v) {
            $this->ville_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::VILLE_INSCRIT;
        }


        return $this;
    } // setVilleInscrit()

    /**
     * Set the value of [pays_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setPaysInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_inscrit !== $v) {
            $this->pays_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::PAYS_INSCRIT;
        }


        return $this;
    } // setPaysInscrit()

    /**
     * Set the value of [acronyme_pays] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setAcronymePays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme_pays !== $v) {
            $this->acronyme_pays = $v;
            $this->modifiedColumns[] = CommonOffresPeer::ACRONYME_PAYS;
        }


        return $this;
    } // setAcronymePays()

    /**
     * Set the value of [siret_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setSiretEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret_entreprise !== $v) {
            $this->siret_entreprise = $v;
            $this->modifiedColumns[] = CommonOffresPeer::SIRET_ENTREPRISE;
        }


        return $this;
    } // setSiretEntreprise()

    /**
     * Set the value of [identifiant_national] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setIdentifiantNational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_national !== $v) {
            $this->identifiant_national = $v;
            $this->modifiedColumns[] = CommonOffresPeer::IDENTIFIANT_NATIONAL;
        }


        return $this;
    } // setIdentifiantNational()

    /**
     * Set the value of [email_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setEmailInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_inscrit !== $v) {
            $this->email_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::EMAIL_INSCRIT;
        }


        return $this;
    } // setEmailInscrit()

    /**
     * Set the value of [siret_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setSiretInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret_inscrit !== $v) {
            $this->siret_inscrit = $v;
            $this->modifiedColumns[] = CommonOffresPeer::SIRET_INSCRIT;
        }


        return $this;
    } // setSiretInscrit()

    /**
     * Set the value of [nom_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setNomEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entreprise !== $v) {
            $this->nom_entreprise = $v;
            $this->modifiedColumns[] = CommonOffresPeer::NOM_ENTREPRISE;
        }


        return $this;
    } // setNomEntreprise()

    /**
     * Set the value of [horodatage_annulation] column.
     * 
     * @param resource $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setHorodatageAnnulation($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage_annulation = fopen('php://memory', 'r+');
            fwrite($this->horodatage_annulation, $v);
            rewind($this->horodatage_annulation);
        } else { // it's already a stream
            $this->horodatage_annulation = $v;
        }
        $this->modifiedColumns[] = CommonOffresPeer::HORODATAGE_ANNULATION;


        return $this;
    } // setHorodatageAnnulation()

    /**
     * Set the value of [date_annulation] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setDateAnnulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_annulation !== $v) {
            $this->date_annulation = $v;
            $this->modifiedColumns[] = CommonOffresPeer::DATE_ANNULATION;
        }


        return $this;
    } // setDateAnnulation()

    /**
     * Set the value of [signature_annulation] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setSignatureAnnulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signature_annulation !== $v) {
            $this->signature_annulation = $v;
            $this->modifiedColumns[] = CommonOffresPeer::SIGNATURE_ANNULATION;
        }


        return $this;
    } // setSignatureAnnulation()

    /**
     * Set the value of [depot_annule] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setDepotAnnule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depot_annule !== $v) {
            $this->depot_annule = $v;
            $this->modifiedColumns[] = CommonOffresPeer::DEPOT_ANNULE;
        }


        return $this;
    } // setDepotAnnule()

    /**
     * Set the value of [string_annulation] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setStringAnnulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->string_annulation !== $v) {
            $this->string_annulation = $v;
            $this->modifiedColumns[] = CommonOffresPeer::STRING_ANNULATION;
        }


        return $this;
    } // setStringAnnulation()

    /**
     * Set the value of [verification_certificat_annulation] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setVerificationCertificatAnnulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->verification_certificat_annulation !== $v) {
            $this->verification_certificat_annulation = $v;
            $this->modifiedColumns[] = CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION;
        }


        return $this;
    } // setVerificationCertificatAnnulation()

    /**
     * Set the value of [offre_variante] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setOffreVariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->offre_variante !== $v) {
            $this->offre_variante = $v;
            $this->modifiedColumns[] = CommonOffresPeer::OFFRE_VARIANTE;
        }


        return $this;
    } // setOffreVariante()

    /**
     * Set the value of [reponse_pas_a_pas] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setReponsePasAPas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_pas_a_pas !== $v) {
            $this->reponse_pas_a_pas = $v;
            $this->modifiedColumns[] = CommonOffresPeer::REPONSE_PAS_A_PAS;
        }


        return $this;
    } // setReponsePasAPas()

    /**
     * Set the value of [numero_reponse] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setNumeroReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_reponse !== $v) {
            $this->numero_reponse = $v;
            $this->modifiedColumns[] = CommonOffresPeer::NUMERO_REPONSE;
        }


        return $this;
    } // setNumeroReponse()

    /**
     * Set the value of [statut_offres] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setStatutOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_offres !== $v) {
            $this->statut_offres = $v;
            $this->modifiedColumns[] = CommonOffresPeer::STATUT_OFFRES;
        }


        return $this;
    } // setStatutOffres()

    /**
     * Set the value of [date_heure_ouverture] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setDateHeureOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_heure_ouverture !== $v) {
            $this->date_heure_ouverture = $v;
            $this->modifiedColumns[] = CommonOffresPeer::DATE_HEURE_OUVERTURE;
        }


        return $this;
    } // setDateHeureOuverture()

    /**
     * Set the value of [agentid_ouverture] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setAgentidOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agentid_ouverture !== $v) {
            $this->agentid_ouverture = $v;
            $this->modifiedColumns[] = CommonOffresPeer::AGENTID_OUVERTURE;
        }


        return $this;
    } // setAgentidOuverture()

    /**
     * Set the value of [agentid_ouverture2] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setAgentidOuverture2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agentid_ouverture2 !== $v) {
            $this->agentid_ouverture2 = $v;
            $this->modifiedColumns[] = CommonOffresPeer::AGENTID_OUVERTURE2;
        }


        return $this;
    } // setAgentidOuverture2()

    /**
     * Set the value of [date_heure_ouverture_agent2] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setDateHeureOuvertureAgent2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_heure_ouverture_agent2 !== $v) {
            $this->date_heure_ouverture_agent2 = $v;
            $this->modifiedColumns[] = CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2;
        }


        return $this;
    } // setDateHeureOuvertureAgent2()

    /**
     * Set the value of [cryptage_reponse] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setCryptageReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cryptage_reponse !== $v) {
            $this->cryptage_reponse = $v;
            $this->modifiedColumns[] = CommonOffresPeer::CRYPTAGE_REPONSE;
        }


        return $this;
    } // setCryptageReponse()

    /**
     * Set the value of [nom_agent_ouverture] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setNomAgentOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_ouverture !== $v) {
            $this->nom_agent_ouverture = $v;
            $this->modifiedColumns[] = CommonOffresPeer::NOM_AGENT_OUVERTURE;
        }


        return $this;
    } // setNomAgentOuverture()

    /**
     * Set the value of [agent_telechargement_offre] column.
     * 
     * @param int $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setAgentTelechargementOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_telechargement_offre !== $v) {
            $this->agent_telechargement_offre = $v;
            $this->modifiedColumns[] = CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE;
        }


        return $this;
    } // setAgentTelechargementOffre()

    /**
     * Set the value of [date_telechargement_offre] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setDateTelechargementOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_telechargement_offre !== $v) {
            $this->date_telechargement_offre = $v;
            $this->modifiedColumns[] = CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE;
        }


        return $this;
    } // setDateTelechargementOffre()

    /**
     * Set the value of [repertoire_telechargement_offre] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setRepertoireTelechargementOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->repertoire_telechargement_offre !== $v) {
            $this->repertoire_telechargement_offre = $v;
            $this->modifiedColumns[] = CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE;
        }


        return $this;
    } // setRepertoireTelechargementOffre()

    /**
     * Set the value of [ifu_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setIfuEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu_entreprise !== $v) {
            $this->ifu_entreprise = $v;
            $this->modifiedColumns[] = CommonOffresPeer::IFU_ENTREPRISE;
        }


        return $this;
    } // setIfuEntreprise()

    /**
     * Set the value of [type_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonOffres The current object (for fluent API support)
     */
    public function setTypeEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_entreprise !== $v) {
            $this->type_entreprise = $v;
            $this->modifiedColumns[] = CommonOffresPeer::TYPE_ENTREPRISE;
        }


        return $this;
    } // setTypeEntreprise()

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

            if ($this->consultation_ref !== 0) {
                return false;
            }

            if ($this->entreprise_id !== 0) {
                return false;
            }

            if ($this->inscrit_id !== 0) {
                return false;
            }

            if ($this->mailsignataire !== '') {
                return false;
            }

            if ($this->untrusteddate !== NULL) {
                return false;
            }

            if ($this->untrustedserial !== '') {
                return false;
            }

            if ($this->envoi_complet !== '') {
                return false;
            }

            if ($this->date_depot_differe !== NULL) {
                return false;
            }

            if ($this->uid_offre !== '') {
                return false;
            }

            if ($this->offre_selectionnee !== 0) {
                return false;
            }

            if ($this->depot_annule !== '0') {
                return false;
            }

            if ($this->reponse_pas_a_pas !== '0') {
                return false;
            }

            if ($this->date_heure_ouverture !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->date_heure_ouverture_agent2 !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->cryptage_reponse !== '1') {
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
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->entreprise_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->inscrit_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            if ($row[$startcol + 5] !== null) {
                $this->signatureenvxml = fopen('php://memory', 'r+');
                fwrite($this->signatureenvxml, $row[$startcol + 5]);
                rewind($this->signatureenvxml);
            } else {
                $this->signatureenvxml = null;
            }
            if ($row[$startcol + 6] !== null) {
                $this->horodatage = fopen('php://memory', 'r+');
                fwrite($this->horodatage, $row[$startcol + 6]);
                rewind($this->horodatage);
            } else {
                $this->horodatage = null;
            }
            $this->mailsignataire = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->untrusteddate = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->untrustedserial = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->envoi_complet = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_depot_differe = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            if ($row[$startcol + 12] !== null) {
                $this->horodatage_envoi_differe = fopen('php://memory', 'r+');
                fwrite($this->horodatage_envoi_differe, $row[$startcol + 12]);
                rewind($this->horodatage_envoi_differe);
            } else {
                $this->horodatage_envoi_differe = null;
            }
            if ($row[$startcol + 13] !== null) {
                $this->signatureenvxml_envoi_differe = fopen('php://memory', 'r+');
                fwrite($this->signatureenvxml_envoi_differe, $row[$startcol + 13]);
                rewind($this->signatureenvxml_envoi_differe);
            } else {
                $this->signatureenvxml_envoi_differe = null;
            }
            $this->external_serial = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->internal_serial = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->uid_offre = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->offre_selectionnee = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->observation = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->xml_string = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->nom_entreprise_inscrit = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->nom_inscrit = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->prenom_inscrit = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->adresse_inscrit = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->adresse2_inscrit = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->telephone_inscrit = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->fax_inscrit = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->code_postal_inscrit = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->ville_inscrit = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->pays_inscrit = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->acronyme_pays = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->siret_entreprise = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->identifiant_national = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->email_inscrit = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->siret_inscrit = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->nom_entreprise = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            if ($row[$startcol + 36] !== null) {
                $this->horodatage_annulation = fopen('php://memory', 'r+');
                fwrite($this->horodatage_annulation, $row[$startcol + 36]);
                rewind($this->horodatage_annulation);
            } else {
                $this->horodatage_annulation = null;
            }
            $this->date_annulation = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->signature_annulation = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->depot_annule = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->string_annulation = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->verification_certificat_annulation = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->offre_variante = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->reponse_pas_a_pas = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->numero_reponse = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->statut_offres = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->date_heure_ouverture = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->agentid_ouverture = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->agentid_ouverture2 = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->date_heure_ouverture_agent2 = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->cryptage_reponse = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->nom_agent_ouverture = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->agent_telechargement_offre = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->date_telechargement_offre = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->repertoire_telechargement_offre = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->ifu_entreprise = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->type_entreprise = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 57; // 57 = CommonOffresPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonOffres object", $e);
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
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonOffresPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonOffresQuery::create()
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
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonOffresPeer::addInstanceToPool($this);
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
                // Rewind the signatureenvxml LOB column, since PDO does not rewind after inserting value.
                if ($this->signatureenvxml !== null && is_resource($this->signatureenvxml)) {
                    rewind($this->signatureenvxml);
                }

                // Rewind the horodatage LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage !== null && is_resource($this->horodatage)) {
                    rewind($this->horodatage);
                }

                // Rewind the horodatage_envoi_differe LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage_envoi_differe !== null && is_resource($this->horodatage_envoi_differe)) {
                    rewind($this->horodatage_envoi_differe);
                }

                // Rewind the signatureenvxml_envoi_differe LOB column, since PDO does not rewind after inserting value.
                if ($this->signatureenvxml_envoi_differe !== null && is_resource($this->signatureenvxml_envoi_differe)) {
                    rewind($this->signatureenvxml_envoi_differe);
                }

                // Rewind the horodatage_annulation LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage_annulation !== null && is_resource($this->horodatage_annulation)) {
                    rewind($this->horodatage_annulation);
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

        $this->modifiedColumns[] = CommonOffresPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonOffresPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonOffresPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonOffresPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonOffresPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonOffresPeer::ENTREPRISE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_id`';
        }
        if ($this->isColumnModified(CommonOffresPeer::INSCRIT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`inscrit_id`';
        }
        if ($this->isColumnModified(CommonOffresPeer::SIGNATUREENVXML)) {
            $modifiedColumns[':p' . $index++]  = '`signatureenvxml`';
        }
        if ($this->isColumnModified(CommonOffresPeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonOffresPeer::MAILSIGNATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`mailsignataire`';
        }
        if ($this->isColumnModified(CommonOffresPeer::UNTRUSTEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate`';
        }
        if ($this->isColumnModified(CommonOffresPeer::UNTRUSTEDSERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`untrustedserial`';
        }
        if ($this->isColumnModified(CommonOffresPeer::ENVOI_COMPLET)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_complet`';
        }
        if ($this->isColumnModified(CommonOffresPeer::DATE_DEPOT_DIFFERE)) {
            $modifiedColumns[':p' . $index++]  = '`date_depot_differe`';
        }
        if ($this->isColumnModified(CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage_envoi_differe`';
        }
        if ($this->isColumnModified(CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE)) {
            $modifiedColumns[':p' . $index++]  = '`signatureenvxml_envoi_differe`';
        }
        if ($this->isColumnModified(CommonOffresPeer::EXTERNAL_SERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`external_serial`';
        }
        if ($this->isColumnModified(CommonOffresPeer::INTERNAL_SERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`internal_serial`';
        }
        if ($this->isColumnModified(CommonOffresPeer::UID_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`uid_offre`';
        }
        if ($this->isColumnModified(CommonOffresPeer::OFFRE_SELECTIONNEE)) {
            $modifiedColumns[':p' . $index++]  = '`offre_selectionnee`';
        }
        if ($this->isColumnModified(CommonOffresPeer::OBSERVATION)) {
            $modifiedColumns[':p' . $index++]  = '`Observation`';
        }
        if ($this->isColumnModified(CommonOffresPeer::XML_STRING)) {
            $modifiedColumns[':p' . $index++]  = '`xml_string`';
        }
        if ($this->isColumnModified(CommonOffresPeer::NOM_ENTREPRISE_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_entreprise_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::NOM_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::PRENOM_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::ADRESSE_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::ADRESSE2_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::TELEPHONE_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`telephone_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::FAX_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`fax_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::CODE_POSTAL_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::VILLE_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`ville_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::PAYS_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`pays_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::ACRONYME_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme_pays`';
        }
        if ($this->isColumnModified(CommonOffresPeer::SIRET_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`siret_entreprise`';
        }
        if ($this->isColumnModified(CommonOffresPeer::IDENTIFIANT_NATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_national`';
        }
        if ($this->isColumnModified(CommonOffresPeer::EMAIL_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`email_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::SIRET_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`siret_inscrit`';
        }
        if ($this->isColumnModified(CommonOffresPeer::NOM_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_entreprise`';
        }
        if ($this->isColumnModified(CommonOffresPeer::HORODATAGE_ANNULATION)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage_annulation`';
        }
        if ($this->isColumnModified(CommonOffresPeer::DATE_ANNULATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_annulation`';
        }
        if ($this->isColumnModified(CommonOffresPeer::SIGNATURE_ANNULATION)) {
            $modifiedColumns[':p' . $index++]  = '`signature_annulation`';
        }
        if ($this->isColumnModified(CommonOffresPeer::DEPOT_ANNULE)) {
            $modifiedColumns[':p' . $index++]  = '`depot_annule`';
        }
        if ($this->isColumnModified(CommonOffresPeer::STRING_ANNULATION)) {
            $modifiedColumns[':p' . $index++]  = '`string_annulation`';
        }
        if ($this->isColumnModified(CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION)) {
            $modifiedColumns[':p' . $index++]  = '`verification_certificat_annulation`';
        }
        if ($this->isColumnModified(CommonOffresPeer::OFFRE_VARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`offre_variante`';
        }
        if ($this->isColumnModified(CommonOffresPeer::REPONSE_PAS_A_PAS)) {
            $modifiedColumns[':p' . $index++]  = '`reponse_pas_a_pas`';
        }
        if ($this->isColumnModified(CommonOffresPeer::NUMERO_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_reponse`';
        }
        if ($this->isColumnModified(CommonOffresPeer::STATUT_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`statut_offres`';
        }
        if ($this->isColumnModified(CommonOffresPeer::DATE_HEURE_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`date_heure_ouverture`';
        }
        if ($this->isColumnModified(CommonOffresPeer::AGENTID_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`agentid_ouverture`';
        }
        if ($this->isColumnModified(CommonOffresPeer::AGENTID_OUVERTURE2)) {
            $modifiedColumns[':p' . $index++]  = '`agentid_ouverture2`';
        }
        if ($this->isColumnModified(CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2)) {
            $modifiedColumns[':p' . $index++]  = '`date_heure_ouverture_agent2`';
        }
        if ($this->isColumnModified(CommonOffresPeer::CRYPTAGE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`cryptage_reponse`';
        }
        if ($this->isColumnModified(CommonOffresPeer::NOM_AGENT_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent_ouverture`';
        }
        if ($this->isColumnModified(CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`agent_telechargement_offre`';
        }
        if ($this->isColumnModified(CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`date_telechargement_offre`';
        }
        if ($this->isColumnModified(CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`repertoire_telechargement_offre`';
        }
        if ($this->isColumnModified(CommonOffresPeer::IFU_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`ifu_entreprise`';
        }
        if ($this->isColumnModified(CommonOffresPeer::TYPE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`type_entreprise`';
        }

        $sql = sprintf(
            'INSERT INTO `Offres` (%s) VALUES (%s)',
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
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`entreprise_id`':						
                        $stmt->bindValue($identifier, $this->entreprise_id, PDO::PARAM_INT);
                        break;
                    case '`inscrit_id`':						
                        $stmt->bindValue($identifier, $this->inscrit_id, PDO::PARAM_INT);
                        break;
                    case '`signatureenvxml`':						
                        if (is_resource($this->signatureenvxml)) {
                            rewind($this->signatureenvxml);
                        }
                        $stmt->bindValue($identifier, $this->signatureenvxml, PDO::PARAM_LOB);
                        break;
                    case '`horodatage`':						
                        if (is_resource($this->horodatage)) {
                            rewind($this->horodatage);
                        }
                        $stmt->bindValue($identifier, $this->horodatage, PDO::PARAM_LOB);
                        break;
                    case '`mailsignataire`':						
                        $stmt->bindValue($identifier, $this->mailsignataire, PDO::PARAM_STR);
                        break;
                    case '`untrusteddate`':						
                        $stmt->bindValue($identifier, $this->untrusteddate, PDO::PARAM_STR);
                        break;
                    case '`untrustedserial`':						
                        $stmt->bindValue($identifier, $this->untrustedserial, PDO::PARAM_STR);
                        break;
                    case '`envoi_complet`':						
                        $stmt->bindValue($identifier, $this->envoi_complet, PDO::PARAM_STR);
                        break;
                    case '`date_depot_differe`':						
                        $stmt->bindValue($identifier, $this->date_depot_differe, PDO::PARAM_STR);
                        break;
                    case '`horodatage_envoi_differe`':						
                        if (is_resource($this->horodatage_envoi_differe)) {
                            rewind($this->horodatage_envoi_differe);
                        }
                        $stmt->bindValue($identifier, $this->horodatage_envoi_differe, PDO::PARAM_LOB);
                        break;
                    case '`signatureenvxml_envoi_differe`':						
                        if (is_resource($this->signatureenvxml_envoi_differe)) {
                            rewind($this->signatureenvxml_envoi_differe);
                        }
                        $stmt->bindValue($identifier, $this->signatureenvxml_envoi_differe, PDO::PARAM_LOB);
                        break;
                    case '`external_serial`':						
                        $stmt->bindValue($identifier, $this->external_serial, PDO::PARAM_STR);
                        break;
                    case '`internal_serial`':						
                        $stmt->bindValue($identifier, $this->internal_serial, PDO::PARAM_STR);
                        break;
                    case '`uid_offre`':						
                        $stmt->bindValue($identifier, $this->uid_offre, PDO::PARAM_STR);
                        break;
                    case '`offre_selectionnee`':						
                        $stmt->bindValue($identifier, $this->offre_selectionnee, PDO::PARAM_INT);
                        break;
                    case '`Observation`':						
                        $stmt->bindValue($identifier, $this->observation, PDO::PARAM_STR);
                        break;
                    case '`xml_string`':						
                        $stmt->bindValue($identifier, $this->xml_string, PDO::PARAM_STR);
                        break;
                    case '`nom_entreprise_inscrit`':						
                        $stmt->bindValue($identifier, $this->nom_entreprise_inscrit, PDO::PARAM_STR);
                        break;
                    case '`nom_inscrit`':						
                        $stmt->bindValue($identifier, $this->nom_inscrit, PDO::PARAM_STR);
                        break;
                    case '`prenom_inscrit`':						
                        $stmt->bindValue($identifier, $this->prenom_inscrit, PDO::PARAM_STR);
                        break;
                    case '`adresse_inscrit`':						
                        $stmt->bindValue($identifier, $this->adresse_inscrit, PDO::PARAM_STR);
                        break;
                    case '`adresse2_inscrit`':						
                        $stmt->bindValue($identifier, $this->adresse2_inscrit, PDO::PARAM_STR);
                        break;
                    case '`telephone_inscrit`':						
                        $stmt->bindValue($identifier, $this->telephone_inscrit, PDO::PARAM_STR);
                        break;
                    case '`fax_inscrit`':						
                        $stmt->bindValue($identifier, $this->fax_inscrit, PDO::PARAM_STR);
                        break;
                    case '`code_postal_inscrit`':						
                        $stmt->bindValue($identifier, $this->code_postal_inscrit, PDO::PARAM_STR);
                        break;
                    case '`ville_inscrit`':						
                        $stmt->bindValue($identifier, $this->ville_inscrit, PDO::PARAM_STR);
                        break;
                    case '`pays_inscrit`':						
                        $stmt->bindValue($identifier, $this->pays_inscrit, PDO::PARAM_STR);
                        break;
                    case '`acronyme_pays`':						
                        $stmt->bindValue($identifier, $this->acronyme_pays, PDO::PARAM_STR);
                        break;
                    case '`siret_entreprise`':						
                        $stmt->bindValue($identifier, $this->siret_entreprise, PDO::PARAM_STR);
                        break;
                    case '`identifiant_national`':						
                        $stmt->bindValue($identifier, $this->identifiant_national, PDO::PARAM_STR);
                        break;
                    case '`email_inscrit`':						
                        $stmt->bindValue($identifier, $this->email_inscrit, PDO::PARAM_STR);
                        break;
                    case '`siret_inscrit`':						
                        $stmt->bindValue($identifier, $this->siret_inscrit, PDO::PARAM_STR);
                        break;
                    case '`nom_entreprise`':						
                        $stmt->bindValue($identifier, $this->nom_entreprise, PDO::PARAM_STR);
                        break;
                    case '`horodatage_annulation`':						
                        if (is_resource($this->horodatage_annulation)) {
                            rewind($this->horodatage_annulation);
                        }
                        $stmt->bindValue($identifier, $this->horodatage_annulation, PDO::PARAM_LOB);
                        break;
                    case '`date_annulation`':						
                        $stmt->bindValue($identifier, $this->date_annulation, PDO::PARAM_STR);
                        break;
                    case '`signature_annulation`':						
                        $stmt->bindValue($identifier, $this->signature_annulation, PDO::PARAM_STR);
                        break;
                    case '`depot_annule`':						
                        $stmt->bindValue($identifier, $this->depot_annule, PDO::PARAM_STR);
                        break;
                    case '`string_annulation`':						
                        $stmt->bindValue($identifier, $this->string_annulation, PDO::PARAM_STR);
                        break;
                    case '`verification_certificat_annulation`':						
                        $stmt->bindValue($identifier, $this->verification_certificat_annulation, PDO::PARAM_STR);
                        break;
                    case '`offre_variante`':						
                        $stmt->bindValue($identifier, $this->offre_variante, PDO::PARAM_STR);
                        break;
                    case '`reponse_pas_a_pas`':						
                        $stmt->bindValue($identifier, $this->reponse_pas_a_pas, PDO::PARAM_STR);
                        break;
                    case '`numero_reponse`':						
                        $stmt->bindValue($identifier, $this->numero_reponse, PDO::PARAM_INT);
                        break;
                    case '`statut_offres`':						
                        $stmt->bindValue($identifier, $this->statut_offres, PDO::PARAM_INT);
                        break;
                    case '`date_heure_ouverture`':						
                        $stmt->bindValue($identifier, $this->date_heure_ouverture, PDO::PARAM_STR);
                        break;
                    case '`agentid_ouverture`':						
                        $stmt->bindValue($identifier, $this->agentid_ouverture, PDO::PARAM_INT);
                        break;
                    case '`agentid_ouverture2`':						
                        $stmt->bindValue($identifier, $this->agentid_ouverture2, PDO::PARAM_INT);
                        break;
                    case '`date_heure_ouverture_agent2`':						
                        $stmt->bindValue($identifier, $this->date_heure_ouverture_agent2, PDO::PARAM_STR);
                        break;
                    case '`cryptage_reponse`':						
                        $stmt->bindValue($identifier, $this->cryptage_reponse, PDO::PARAM_STR);
                        break;
                    case '`nom_agent_ouverture`':						
                        $stmt->bindValue($identifier, $this->nom_agent_ouverture, PDO::PARAM_STR);
                        break;
                    case '`agent_telechargement_offre`':						
                        $stmt->bindValue($identifier, $this->agent_telechargement_offre, PDO::PARAM_INT);
                        break;
                    case '`date_telechargement_offre`':						
                        $stmt->bindValue($identifier, $this->date_telechargement_offre, PDO::PARAM_STR);
                        break;
                    case '`repertoire_telechargement_offre`':						
                        $stmt->bindValue($identifier, $this->repertoire_telechargement_offre, PDO::PARAM_STR);
                        break;
                    case '`ifu_entreprise`':						
                        $stmt->bindValue($identifier, $this->ifu_entreprise, PDO::PARAM_STR);
                        break;
                    case '`type_entreprise`':						
                        $stmt->bindValue($identifier, $this->type_entreprise, PDO::PARAM_STR);
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


            if (($retval = CommonOffresPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonOffresPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getEntrepriseId();
                break;
            case 4:
                return $this->getInscritId();
                break;
            case 5:
                return $this->getSignatureenvxml();
                break;
            case 6:
                return $this->getHorodatage();
                break;
            case 7:
                return $this->getMailsignataire();
                break;
            case 8:
                return $this->getUntrusteddate();
                break;
            case 9:
                return $this->getUntrustedserial();
                break;
            case 10:
                return $this->getEnvoiComplet();
                break;
            case 11:
                return $this->getDateDepotDiffere();
                break;
            case 12:
                return $this->getHorodatageEnvoiDiffere();
                break;
            case 13:
                return $this->getSignatureenvxmlEnvoiDiffere();
                break;
            case 14:
                return $this->getExternalSerial();
                break;
            case 15:
                return $this->getInternalSerial();
                break;
            case 16:
                return $this->getUidOffre();
                break;
            case 17:
                return $this->getOffreSelectionnee();
                break;
            case 18:
                return $this->getObservation();
                break;
            case 19:
                return $this->getXmlString();
                break;
            case 20:
                return $this->getNomEntrepriseInscrit();
                break;
            case 21:
                return $this->getNomInscrit();
                break;
            case 22:
                return $this->getPrenomInscrit();
                break;
            case 23:
                return $this->getAdresseInscrit();
                break;
            case 24:
                return $this->getAdresse2Inscrit();
                break;
            case 25:
                return $this->getTelephoneInscrit();
                break;
            case 26:
                return $this->getFaxInscrit();
                break;
            case 27:
                return $this->getCodePostalInscrit();
                break;
            case 28:
                return $this->getVilleInscrit();
                break;
            case 29:
                return $this->getPaysInscrit();
                break;
            case 30:
                return $this->getAcronymePays();
                break;
            case 31:
                return $this->getSiretEntreprise();
                break;
            case 32:
                return $this->getIdentifiantNational();
                break;
            case 33:
                return $this->getEmailInscrit();
                break;
            case 34:
                return $this->getSiretInscrit();
                break;
            case 35:
                return $this->getNomEntreprise();
                break;
            case 36:
                return $this->getHorodatageAnnulation();
                break;
            case 37:
                return $this->getDateAnnulation();
                break;
            case 38:
                return $this->getSignatureAnnulation();
                break;
            case 39:
                return $this->getDepotAnnule();
                break;
            case 40:
                return $this->getStringAnnulation();
                break;
            case 41:
                return $this->getVerificationCertificatAnnulation();
                break;
            case 42:
                return $this->getOffreVariante();
                break;
            case 43:
                return $this->getReponsePasAPas();
                break;
            case 44:
                return $this->getNumeroReponse();
                break;
            case 45:
                return $this->getStatutOffres();
                break;
            case 46:
                return $this->getDateHeureOuverture();
                break;
            case 47:
                return $this->getAgentidOuverture();
                break;
            case 48:
                return $this->getAgentidOuverture2();
                break;
            case 49:
                return $this->getDateHeureOuvertureAgent2();
                break;
            case 50:
                return $this->getCryptageReponse();
                break;
            case 51:
                return $this->getNomAgentOuverture();
                break;
            case 52:
                return $this->getAgentTelechargementOffre();
                break;
            case 53:
                return $this->getDateTelechargementOffre();
                break;
            case 54:
                return $this->getRepertoireTelechargementOffre();
                break;
            case 55:
                return $this->getIfuEntreprise();
                break;
            case 56:
                return $this->getTypeEntreprise();
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
        if (isset($alreadyDumpedObjects['CommonOffres'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonOffres'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonOffresPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getEntrepriseId(),
            $keys[4] => $this->getInscritId(),
            $keys[5] => $this->getSignatureenvxml(),
            $keys[6] => $this->getHorodatage(),
            $keys[7] => $this->getMailsignataire(),
            $keys[8] => $this->getUntrusteddate(),
            $keys[9] => $this->getUntrustedserial(),
            $keys[10] => $this->getEnvoiComplet(),
            $keys[11] => $this->getDateDepotDiffere(),
            $keys[12] => $this->getHorodatageEnvoiDiffere(),
            $keys[13] => $this->getSignatureenvxmlEnvoiDiffere(),
            $keys[14] => $this->getExternalSerial(),
            $keys[15] => $this->getInternalSerial(),
            $keys[16] => $this->getUidOffre(),
            $keys[17] => $this->getOffreSelectionnee(),
            $keys[18] => $this->getObservation(),
            $keys[19] => $this->getXmlString(),
            $keys[20] => $this->getNomEntrepriseInscrit(),
            $keys[21] => $this->getNomInscrit(),
            $keys[22] => $this->getPrenomInscrit(),
            $keys[23] => $this->getAdresseInscrit(),
            $keys[24] => $this->getAdresse2Inscrit(),
            $keys[25] => $this->getTelephoneInscrit(),
            $keys[26] => $this->getFaxInscrit(),
            $keys[27] => $this->getCodePostalInscrit(),
            $keys[28] => $this->getVilleInscrit(),
            $keys[29] => $this->getPaysInscrit(),
            $keys[30] => $this->getAcronymePays(),
            $keys[31] => $this->getSiretEntreprise(),
            $keys[32] => $this->getIdentifiantNational(),
            $keys[33] => $this->getEmailInscrit(),
            $keys[34] => $this->getSiretInscrit(),
            $keys[35] => $this->getNomEntreprise(),
            $keys[36] => $this->getHorodatageAnnulation(),
            $keys[37] => $this->getDateAnnulation(),
            $keys[38] => $this->getSignatureAnnulation(),
            $keys[39] => $this->getDepotAnnule(),
            $keys[40] => $this->getStringAnnulation(),
            $keys[41] => $this->getVerificationCertificatAnnulation(),
            $keys[42] => $this->getOffreVariante(),
            $keys[43] => $this->getReponsePasAPas(),
            $keys[44] => $this->getNumeroReponse(),
            $keys[45] => $this->getStatutOffres(),
            $keys[46] => $this->getDateHeureOuverture(),
            $keys[47] => $this->getAgentidOuverture(),
            $keys[48] => $this->getAgentidOuverture2(),
            $keys[49] => $this->getDateHeureOuvertureAgent2(),
            $keys[50] => $this->getCryptageReponse(),
            $keys[51] => $this->getNomAgentOuverture(),
            $keys[52] => $this->getAgentTelechargementOffre(),
            $keys[53] => $this->getDateTelechargementOffre(),
            $keys[54] => $this->getRepertoireTelechargementOffre(),
            $keys[55] => $this->getIfuEntreprise(),
            $keys[56] => $this->getTypeEntreprise(),
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
        $pos = CommonOffresPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setEntrepriseId($value);
                break;
            case 4:
                $this->setInscritId($value);
                break;
            case 5:
                $this->setSignatureenvxml($value);
                break;
            case 6:
                $this->setHorodatage($value);
                break;
            case 7:
                $this->setMailsignataire($value);
                break;
            case 8:
                $this->setUntrusteddate($value);
                break;
            case 9:
                $this->setUntrustedserial($value);
                break;
            case 10:
                $this->setEnvoiComplet($value);
                break;
            case 11:
                $this->setDateDepotDiffere($value);
                break;
            case 12:
                $this->setHorodatageEnvoiDiffere($value);
                break;
            case 13:
                $this->setSignatureenvxmlEnvoiDiffere($value);
                break;
            case 14:
                $this->setExternalSerial($value);
                break;
            case 15:
                $this->setInternalSerial($value);
                break;
            case 16:
                $this->setUidOffre($value);
                break;
            case 17:
                $this->setOffreSelectionnee($value);
                break;
            case 18:
                $this->setObservation($value);
                break;
            case 19:
                $this->setXmlString($value);
                break;
            case 20:
                $this->setNomEntrepriseInscrit($value);
                break;
            case 21:
                $this->setNomInscrit($value);
                break;
            case 22:
                $this->setPrenomInscrit($value);
                break;
            case 23:
                $this->setAdresseInscrit($value);
                break;
            case 24:
                $this->setAdresse2Inscrit($value);
                break;
            case 25:
                $this->setTelephoneInscrit($value);
                break;
            case 26:
                $this->setFaxInscrit($value);
                break;
            case 27:
                $this->setCodePostalInscrit($value);
                break;
            case 28:
                $this->setVilleInscrit($value);
                break;
            case 29:
                $this->setPaysInscrit($value);
                break;
            case 30:
                $this->setAcronymePays($value);
                break;
            case 31:
                $this->setSiretEntreprise($value);
                break;
            case 32:
                $this->setIdentifiantNational($value);
                break;
            case 33:
                $this->setEmailInscrit($value);
                break;
            case 34:
                $this->setSiretInscrit($value);
                break;
            case 35:
                $this->setNomEntreprise($value);
                break;
            case 36:
                $this->setHorodatageAnnulation($value);
                break;
            case 37:
                $this->setDateAnnulation($value);
                break;
            case 38:
                $this->setSignatureAnnulation($value);
                break;
            case 39:
                $this->setDepotAnnule($value);
                break;
            case 40:
                $this->setStringAnnulation($value);
                break;
            case 41:
                $this->setVerificationCertificatAnnulation($value);
                break;
            case 42:
                $this->setOffreVariante($value);
                break;
            case 43:
                $this->setReponsePasAPas($value);
                break;
            case 44:
                $this->setNumeroReponse($value);
                break;
            case 45:
                $this->setStatutOffres($value);
                break;
            case 46:
                $this->setDateHeureOuverture($value);
                break;
            case 47:
                $this->setAgentidOuverture($value);
                break;
            case 48:
                $this->setAgentidOuverture2($value);
                break;
            case 49:
                $this->setDateHeureOuvertureAgent2($value);
                break;
            case 50:
                $this->setCryptageReponse($value);
                break;
            case 51:
                $this->setNomAgentOuverture($value);
                break;
            case 52:
                $this->setAgentTelechargementOffre($value);
                break;
            case 53:
                $this->setDateTelechargementOffre($value);
                break;
            case 54:
                $this->setRepertoireTelechargementOffre($value);
                break;
            case 55:
                $this->setIfuEntreprise($value);
                break;
            case 56:
                $this->setTypeEntreprise($value);
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
        $keys = CommonOffresPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEntrepriseId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInscritId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSignatureenvxml($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHorodatage($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMailsignataire($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUntrusteddate($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUntrustedserial($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEnvoiComplet($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateDepotDiffere($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setHorodatageEnvoiDiffere($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSignatureenvxmlEnvoiDiffere($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setExternalSerial($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setInternalSerial($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setUidOffre($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOffreSelectionnee($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setObservation($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setXmlString($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setNomEntrepriseInscrit($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setNomInscrit($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPrenomInscrit($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAdresseInscrit($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAdresse2Inscrit($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTelephoneInscrit($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFaxInscrit($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCodePostalInscrit($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setVilleInscrit($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setPaysInscrit($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAcronymePays($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSiretEntreprise($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setIdentifiantNational($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEmailInscrit($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setSiretInscrit($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setNomEntreprise($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setHorodatageAnnulation($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateAnnulation($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setSignatureAnnulation($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDepotAnnule($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setStringAnnulation($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setVerificationCertificatAnnulation($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setOffreVariante($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setReponsePasAPas($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setNumeroReponse($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setStatutOffres($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setDateHeureOuverture($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setAgentidOuverture($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setAgentidOuverture2($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setDateHeureOuvertureAgent2($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setCryptageReponse($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setNomAgentOuverture($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setAgentTelechargementOffre($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDateTelechargementOffre($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setRepertoireTelechargementOffre($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setIfuEntreprise($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setTypeEntreprise($arr[$keys[56]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonOffresPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonOffresPeer::ID)) $criteria->add(CommonOffresPeer::ID, $this->id);
        if ($this->isColumnModified(CommonOffresPeer::ORGANISME)) $criteria->add(CommonOffresPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonOffresPeer::CONSULTATION_REF)) $criteria->add(CommonOffresPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonOffresPeer::ENTREPRISE_ID)) $criteria->add(CommonOffresPeer::ENTREPRISE_ID, $this->entreprise_id);
        if ($this->isColumnModified(CommonOffresPeer::INSCRIT_ID)) $criteria->add(CommonOffresPeer::INSCRIT_ID, $this->inscrit_id);
        if ($this->isColumnModified(CommonOffresPeer::SIGNATUREENVXML)) $criteria->add(CommonOffresPeer::SIGNATUREENVXML, $this->signatureenvxml);
        if ($this->isColumnModified(CommonOffresPeer::HORODATAGE)) $criteria->add(CommonOffresPeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonOffresPeer::MAILSIGNATAIRE)) $criteria->add(CommonOffresPeer::MAILSIGNATAIRE, $this->mailsignataire);
        if ($this->isColumnModified(CommonOffresPeer::UNTRUSTEDDATE)) $criteria->add(CommonOffresPeer::UNTRUSTEDDATE, $this->untrusteddate);
        if ($this->isColumnModified(CommonOffresPeer::UNTRUSTEDSERIAL)) $criteria->add(CommonOffresPeer::UNTRUSTEDSERIAL, $this->untrustedserial);
        if ($this->isColumnModified(CommonOffresPeer::ENVOI_COMPLET)) $criteria->add(CommonOffresPeer::ENVOI_COMPLET, $this->envoi_complet);
        if ($this->isColumnModified(CommonOffresPeer::DATE_DEPOT_DIFFERE)) $criteria->add(CommonOffresPeer::DATE_DEPOT_DIFFERE, $this->date_depot_differe);
        if ($this->isColumnModified(CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE)) $criteria->add(CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE, $this->horodatage_envoi_differe);
        if ($this->isColumnModified(CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE)) $criteria->add(CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE, $this->signatureenvxml_envoi_differe);
        if ($this->isColumnModified(CommonOffresPeer::EXTERNAL_SERIAL)) $criteria->add(CommonOffresPeer::EXTERNAL_SERIAL, $this->external_serial);
        if ($this->isColumnModified(CommonOffresPeer::INTERNAL_SERIAL)) $criteria->add(CommonOffresPeer::INTERNAL_SERIAL, $this->internal_serial);
        if ($this->isColumnModified(CommonOffresPeer::UID_OFFRE)) $criteria->add(CommonOffresPeer::UID_OFFRE, $this->uid_offre);
        if ($this->isColumnModified(CommonOffresPeer::OFFRE_SELECTIONNEE)) $criteria->add(CommonOffresPeer::OFFRE_SELECTIONNEE, $this->offre_selectionnee);
        if ($this->isColumnModified(CommonOffresPeer::OBSERVATION)) $criteria->add(CommonOffresPeer::OBSERVATION, $this->observation);
        if ($this->isColumnModified(CommonOffresPeer::XML_STRING)) $criteria->add(CommonOffresPeer::XML_STRING, $this->xml_string);
        if ($this->isColumnModified(CommonOffresPeer::NOM_ENTREPRISE_INSCRIT)) $criteria->add(CommonOffresPeer::NOM_ENTREPRISE_INSCRIT, $this->nom_entreprise_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::NOM_INSCRIT)) $criteria->add(CommonOffresPeer::NOM_INSCRIT, $this->nom_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::PRENOM_INSCRIT)) $criteria->add(CommonOffresPeer::PRENOM_INSCRIT, $this->prenom_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::ADRESSE_INSCRIT)) $criteria->add(CommonOffresPeer::ADRESSE_INSCRIT, $this->adresse_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::ADRESSE2_INSCRIT)) $criteria->add(CommonOffresPeer::ADRESSE2_INSCRIT, $this->adresse2_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::TELEPHONE_INSCRIT)) $criteria->add(CommonOffresPeer::TELEPHONE_INSCRIT, $this->telephone_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::FAX_INSCRIT)) $criteria->add(CommonOffresPeer::FAX_INSCRIT, $this->fax_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::CODE_POSTAL_INSCRIT)) $criteria->add(CommonOffresPeer::CODE_POSTAL_INSCRIT, $this->code_postal_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::VILLE_INSCRIT)) $criteria->add(CommonOffresPeer::VILLE_INSCRIT, $this->ville_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::PAYS_INSCRIT)) $criteria->add(CommonOffresPeer::PAYS_INSCRIT, $this->pays_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::ACRONYME_PAYS)) $criteria->add(CommonOffresPeer::ACRONYME_PAYS, $this->acronyme_pays);
        if ($this->isColumnModified(CommonOffresPeer::SIRET_ENTREPRISE)) $criteria->add(CommonOffresPeer::SIRET_ENTREPRISE, $this->siret_entreprise);
        if ($this->isColumnModified(CommonOffresPeer::IDENTIFIANT_NATIONAL)) $criteria->add(CommonOffresPeer::IDENTIFIANT_NATIONAL, $this->identifiant_national);
        if ($this->isColumnModified(CommonOffresPeer::EMAIL_INSCRIT)) $criteria->add(CommonOffresPeer::EMAIL_INSCRIT, $this->email_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::SIRET_INSCRIT)) $criteria->add(CommonOffresPeer::SIRET_INSCRIT, $this->siret_inscrit);
        if ($this->isColumnModified(CommonOffresPeer::NOM_ENTREPRISE)) $criteria->add(CommonOffresPeer::NOM_ENTREPRISE, $this->nom_entreprise);
        if ($this->isColumnModified(CommonOffresPeer::HORODATAGE_ANNULATION)) $criteria->add(CommonOffresPeer::HORODATAGE_ANNULATION, $this->horodatage_annulation);
        if ($this->isColumnModified(CommonOffresPeer::DATE_ANNULATION)) $criteria->add(CommonOffresPeer::DATE_ANNULATION, $this->date_annulation);
        if ($this->isColumnModified(CommonOffresPeer::SIGNATURE_ANNULATION)) $criteria->add(CommonOffresPeer::SIGNATURE_ANNULATION, $this->signature_annulation);
        if ($this->isColumnModified(CommonOffresPeer::DEPOT_ANNULE)) $criteria->add(CommonOffresPeer::DEPOT_ANNULE, $this->depot_annule);
        if ($this->isColumnModified(CommonOffresPeer::STRING_ANNULATION)) $criteria->add(CommonOffresPeer::STRING_ANNULATION, $this->string_annulation);
        if ($this->isColumnModified(CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION)) $criteria->add(CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION, $this->verification_certificat_annulation);
        if ($this->isColumnModified(CommonOffresPeer::OFFRE_VARIANTE)) $criteria->add(CommonOffresPeer::OFFRE_VARIANTE, $this->offre_variante);
        if ($this->isColumnModified(CommonOffresPeer::REPONSE_PAS_A_PAS)) $criteria->add(CommonOffresPeer::REPONSE_PAS_A_PAS, $this->reponse_pas_a_pas);
        if ($this->isColumnModified(CommonOffresPeer::NUMERO_REPONSE)) $criteria->add(CommonOffresPeer::NUMERO_REPONSE, $this->numero_reponse);
        if ($this->isColumnModified(CommonOffresPeer::STATUT_OFFRES)) $criteria->add(CommonOffresPeer::STATUT_OFFRES, $this->statut_offres);
        if ($this->isColumnModified(CommonOffresPeer::DATE_HEURE_OUVERTURE)) $criteria->add(CommonOffresPeer::DATE_HEURE_OUVERTURE, $this->date_heure_ouverture);
        if ($this->isColumnModified(CommonOffresPeer::AGENTID_OUVERTURE)) $criteria->add(CommonOffresPeer::AGENTID_OUVERTURE, $this->agentid_ouverture);
        if ($this->isColumnModified(CommonOffresPeer::AGENTID_OUVERTURE2)) $criteria->add(CommonOffresPeer::AGENTID_OUVERTURE2, $this->agentid_ouverture2);
        if ($this->isColumnModified(CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2)) $criteria->add(CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2, $this->date_heure_ouverture_agent2);
        if ($this->isColumnModified(CommonOffresPeer::CRYPTAGE_REPONSE)) $criteria->add(CommonOffresPeer::CRYPTAGE_REPONSE, $this->cryptage_reponse);
        if ($this->isColumnModified(CommonOffresPeer::NOM_AGENT_OUVERTURE)) $criteria->add(CommonOffresPeer::NOM_AGENT_OUVERTURE, $this->nom_agent_ouverture);
        if ($this->isColumnModified(CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE)) $criteria->add(CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE, $this->agent_telechargement_offre);
        if ($this->isColumnModified(CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE)) $criteria->add(CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE, $this->date_telechargement_offre);
        if ($this->isColumnModified(CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE)) $criteria->add(CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE, $this->repertoire_telechargement_offre);
        if ($this->isColumnModified(CommonOffresPeer::IFU_ENTREPRISE)) $criteria->add(CommonOffresPeer::IFU_ENTREPRISE, $this->ifu_entreprise);
        if ($this->isColumnModified(CommonOffresPeer::TYPE_ENTREPRISE)) $criteria->add(CommonOffresPeer::TYPE_ENTREPRISE, $this->type_entreprise);

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
        $criteria = new Criteria(CommonOffresPeer::DATABASE_NAME);
        $criteria->add(CommonOffresPeer::ID, $this->id);
        $criteria->add(CommonOffresPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonOffres (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setEntrepriseId($this->getEntrepriseId());
        $copyObj->setInscritId($this->getInscritId());
        $copyObj->setSignatureenvxml($this->getSignatureenvxml());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setMailsignataire($this->getMailsignataire());
        $copyObj->setUntrusteddate($this->getUntrusteddate());
        $copyObj->setUntrustedserial($this->getUntrustedserial());
        $copyObj->setEnvoiComplet($this->getEnvoiComplet());
        $copyObj->setDateDepotDiffere($this->getDateDepotDiffere());
        $copyObj->setHorodatageEnvoiDiffere($this->getHorodatageEnvoiDiffere());
        $copyObj->setSignatureenvxmlEnvoiDiffere($this->getSignatureenvxmlEnvoiDiffere());
        $copyObj->setExternalSerial($this->getExternalSerial());
        $copyObj->setInternalSerial($this->getInternalSerial());
        $copyObj->setUidOffre($this->getUidOffre());
        $copyObj->setOffreSelectionnee($this->getOffreSelectionnee());
        $copyObj->setObservation($this->getObservation());
        $copyObj->setXmlString($this->getXmlString());
        $copyObj->setNomEntrepriseInscrit($this->getNomEntrepriseInscrit());
        $copyObj->setNomInscrit($this->getNomInscrit());
        $copyObj->setPrenomInscrit($this->getPrenomInscrit());
        $copyObj->setAdresseInscrit($this->getAdresseInscrit());
        $copyObj->setAdresse2Inscrit($this->getAdresse2Inscrit());
        $copyObj->setTelephoneInscrit($this->getTelephoneInscrit());
        $copyObj->setFaxInscrit($this->getFaxInscrit());
        $copyObj->setCodePostalInscrit($this->getCodePostalInscrit());
        $copyObj->setVilleInscrit($this->getVilleInscrit());
        $copyObj->setPaysInscrit($this->getPaysInscrit());
        $copyObj->setAcronymePays($this->getAcronymePays());
        $copyObj->setSiretEntreprise($this->getSiretEntreprise());
        $copyObj->setIdentifiantNational($this->getIdentifiantNational());
        $copyObj->setEmailInscrit($this->getEmailInscrit());
        $copyObj->setSiretInscrit($this->getSiretInscrit());
        $copyObj->setNomEntreprise($this->getNomEntreprise());
        $copyObj->setHorodatageAnnulation($this->getHorodatageAnnulation());
        $copyObj->setDateAnnulation($this->getDateAnnulation());
        $copyObj->setSignatureAnnulation($this->getSignatureAnnulation());
        $copyObj->setDepotAnnule($this->getDepotAnnule());
        $copyObj->setStringAnnulation($this->getStringAnnulation());
        $copyObj->setVerificationCertificatAnnulation($this->getVerificationCertificatAnnulation());
        $copyObj->setOffreVariante($this->getOffreVariante());
        $copyObj->setReponsePasAPas($this->getReponsePasAPas());
        $copyObj->setNumeroReponse($this->getNumeroReponse());
        $copyObj->setStatutOffres($this->getStatutOffres());
        $copyObj->setDateHeureOuverture($this->getDateHeureOuverture());
        $copyObj->setAgentidOuverture($this->getAgentidOuverture());
        $copyObj->setAgentidOuverture2($this->getAgentidOuverture2());
        $copyObj->setDateHeureOuvertureAgent2($this->getDateHeureOuvertureAgent2());
        $copyObj->setCryptageReponse($this->getCryptageReponse());
        $copyObj->setNomAgentOuverture($this->getNomAgentOuverture());
        $copyObj->setAgentTelechargementOffre($this->getAgentTelechargementOffre());
        $copyObj->setDateTelechargementOffre($this->getDateTelechargementOffre());
        $copyObj->setRepertoireTelechargementOffre($this->getRepertoireTelechargementOffre());
        $copyObj->setIfuEntreprise($this->getIfuEntreprise());
        $copyObj->setTypeEntreprise($this->getTypeEntreprise());

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
     * @return CommonOffres Clone of current object.
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
     * @return CommonOffresPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonOffresPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonOffres The current object (for fluent API support)
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
            $this->setConsultationRef(0);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonOffres($this);
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
                $this->aCommonConsultation->addCommonOffress($this);
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
        $this->consultation_ref = null;
        $this->entreprise_id = null;
        $this->inscrit_id = null;
        $this->signatureenvxml = null;
        $this->horodatage = null;
        $this->mailsignataire = null;
        $this->untrusteddate = null;
        $this->untrustedserial = null;
        $this->envoi_complet = null;
        $this->date_depot_differe = null;
        $this->horodatage_envoi_differe = null;
        $this->signatureenvxml_envoi_differe = null;
        $this->external_serial = null;
        $this->internal_serial = null;
        $this->uid_offre = null;
        $this->offre_selectionnee = null;
        $this->observation = null;
        $this->xml_string = null;
        $this->nom_entreprise_inscrit = null;
        $this->nom_inscrit = null;
        $this->prenom_inscrit = null;
        $this->adresse_inscrit = null;
        $this->adresse2_inscrit = null;
        $this->telephone_inscrit = null;
        $this->fax_inscrit = null;
        $this->code_postal_inscrit = null;
        $this->ville_inscrit = null;
        $this->pays_inscrit = null;
        $this->acronyme_pays = null;
        $this->siret_entreprise = null;
        $this->identifiant_national = null;
        $this->email_inscrit = null;
        $this->siret_inscrit = null;
        $this->nom_entreprise = null;
        $this->horodatage_annulation = null;
        $this->date_annulation = null;
        $this->signature_annulation = null;
        $this->depot_annule = null;
        $this->string_annulation = null;
        $this->verification_certificat_annulation = null;
        $this->offre_variante = null;
        $this->reponse_pas_a_pas = null;
        $this->numero_reponse = null;
        $this->statut_offres = null;
        $this->date_heure_ouverture = null;
        $this->agentid_ouverture = null;
        $this->agentid_ouverture2 = null;
        $this->date_heure_ouverture_agent2 = null;
        $this->cryptage_reponse = null;
        $this->nom_agent_ouverture = null;
        $this->agent_telechargement_offre = null;
        $this->date_telechargement_offre = null;
        $this->repertoire_telechargement_offre = null;
        $this->ifu_entreprise = null;
        $this->type_entreprise = null;
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
        return (string) $this->exportTo(CommonOffresPeer::DEFAULT_STRING_FORMAT);
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
