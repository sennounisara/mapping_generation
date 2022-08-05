<?php


/**
 * Base class that represents a row from the 't_demandeur' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTDemandeur extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TDemandeurPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TDemandeurPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_demandeur field.
     * @var        int
     */
    protected $id_demandeur;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the prenom_fr field.
     * @var        string
     */
    protected $prenom_fr;

    /**
     * The value for the nom_fr field.
     * @var        string
     */
    protected $nom_fr;

    /**
     * The value for the raison_sociale field.
     * @var        string
     */
    protected $raison_sociale;

    /**
     * The value for the raison_sociale_ar field.
     * @var        string
     */
    protected $raison_sociale_ar;

    /**
     * The value for the type_requerant field.
     * @var        int
     */
    protected $type_requerant;

    /**
     * The value for the identifiant_fiscal field.
     * @var        string
     */
    protected $identifiant_fiscal;

    /**
     * The value for the organisation field.
     * @var        string
     */
    protected $organisation;

    /**
     * The value for the organisation_ar field.
     * @var        string
     */
    protected $organisation_ar;

    /**
     * The value for the ville_registre_commerce field.
     * @var        int
     */
    protected $ville_registre_commerce;

    /**
     * The value for the numero_registre_commerce field.
     * @var        string
     */
    protected $numero_registre_commerce;

    /**
     * The value for the adresse field.
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the complement_adresse field.
     * @var        string
     */
    protected $complement_adresse;

    /**
     * The value for the code_postal field.
     * @var        string
     */
    protected $code_postal;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the mot_de_passe_demandeur field.
     * @var        string
     */
    protected $mot_de_passe_demandeur;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the telephone_portable field.
     * @var        string
     */
    protected $telephone_portable;

    /**
     * The value for the numero_taxe_professionnelle field.
     * @var        string
     */
    protected $numero_taxe_professionnelle;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the fax_entreprise field.
     * @var        string
     */
    protected $fax_entreprise;

    /**
     * The value for the ice field.
     * @var        string
     */
    protected $ice;

    /**
     * The value for the numero_cnss field.
     * @var        string
     */
    protected $numero_cnss;

    /**
     * The value for the fonction field.
     * @var        string
     */
    protected $fonction;

    /**
     * The value for the telephone_entreprise field.
     * @var        string
     */
    protected $telephone_entreprise;

    /**
     * The value for the numero_patente field.
     * @var        string
     */
    protected $numero_patente;

    /**
     * The value for the email_entreprise field.
     * @var        string
     */
    protected $email_entreprise;

    /**
     * The value for the form_juridique field.
     * @var        string
     */
    protected $form_juridique;

    /**
     * The value for the id_region field.
     * @var        int
     */
    protected $id_region;

    /**
     * The value for the valide field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valide;

    /**
     * The value for the identifiant_national field.
     * @var        string
     */
    protected $identifiant_national;

    /**
     * The value for the type_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_entreprise;

    /**
     * The value for the motif_rejet field.
     * @var        string
     */
    protected $motif_rejet;

    /**
     * The value for the motif_desactivation field.
     * @var        string
     */
    protected $motif_desactivation;

    /**
     * The value for the numero_fournisseur field.
     * @var        string
     */
    protected $numero_fournisseur;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the is_connu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $is_connu;

    /**
     * The value for the id_entite_demandeur field.
     * @var        int
     */
    protected $id_entite_demandeur;

    /**
     * The value for the id_externe field.
     * @var        int
     */
    protected $id_externe;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the annulee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $annulee;

    /**
     * The value for the id_remplacant field.
     * @var        int
     */
    protected $id_remplacant;

    /**
     * The value for the id_organisme field.
     * @var        int
     */
    protected $id_organisme;

    /**
     * The value for the id_entite_organisme field.
     * @var        int
     */
    protected $id_entite_organisme;

    /**
     * The value for the date_dernier_acces field.
     * @var        string
     */
    protected $date_dernier_acces;

    /**
     * The value for the jeton_validation field.
     * @var        string
     */
    protected $jeton_validation;

    /**
     * The value for the statut_enable_account field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_enable_account;

    /**
     * The value for the date_traitement field.
     * @var        string
     */
    protected $date_traitement;

    /**
     * The value for the token_recup field.
     * @var        string
     */
    protected $token_recup;

    /**
     * The value for the date_expiration field.
     * @var        string
     */
    protected $date_expiration;

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
        $this->valide = '0';
        $this->type_entreprise = '0';
        $this->is_connu = '0';
        $this->annulee = '0';
        $this->statut_enable_account = '0';
    }

    /**
     * Initializes internal state of BaseTDemandeur object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_demandeur] column value.
     * 
     * @return int
     */
    public function getIdDemandeur()
    {

        return $this->id_demandeur;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [prenom_fr] column value.
     * 
     * @return string
     */
    public function getPrenomFr()
    {

        return $this->prenom_fr;
    }

    /**
     * Get the [nom_fr] column value.
     * 
     * @return string
     */
    public function getNomFr()
    {

        return $this->nom_fr;
    }

    /**
     * Get the [raison_sociale] column value.
     * 
     * @return string
     */
    public function getRaisonSociale()
    {

        return $this->raison_sociale;
    }

    /**
     * Get the [raison_sociale_ar] column value.
     * 
     * @return string
     */
    public function getRaisonSocialeAr()
    {

        return $this->raison_sociale_ar;
    }

    /**
     * Get the [type_requerant] column value.
     * 
     * @return int
     */
    public function getTypeRequerant()
    {

        return $this->type_requerant;
    }

    /**
     * Get the [identifiant_fiscal] column value.
     * 
     * @return string
     */
    public function getIdentifiantFiscal()
    {

        return $this->identifiant_fiscal;
    }

    /**
     * Get the [organisation] column value.
     * 
     * @return string
     */
    public function getOrganisation()
    {

        return $this->organisation;
    }

    /**
     * Get the [organisation_ar] column value.
     * 
     * @return string
     */
    public function getOrganisationAr()
    {

        return $this->organisation_ar;
    }

    /**
     * Get the [ville_registre_commerce] column value.
     * 
     * @return int
     */
    public function getVilleRegistreCommerce()
    {

        return $this->ville_registre_commerce;
    }

    /**
     * Get the [numero_registre_commerce] column value.
     * 
     * @return string
     */
    public function getNumeroRegistreCommerce()
    {

        return $this->numero_registre_commerce;
    }

    /**
     * Get the [adresse] column value.
     * 
     * @return string
     */
    public function getAdresse()
    {

        return $this->adresse;
    }

    /**
     * Get the [complement_adresse] column value.
     * 
     * @return string
     */
    public function getComplementAdresse()
    {

        return $this->complement_adresse;
    }

    /**
     * Get the [code_postal] column value.
     * 
     * @return string
     */
    public function getCodePostal()
    {

        return $this->code_postal;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return string
     */
    public function getVille()
    {

        return $this->ville;
    }

    /**
     * Get the [pays] column value.
     * 
     * @return string
     */
    public function getPays()
    {

        return $this->pays;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [mot_de_passe_demandeur] column value.
     * 
     * @return string
     */
    public function getMotDePasseDemandeur()
    {

        return $this->mot_de_passe_demandeur;
    }

    /**
     * Get the [telephone] column value.
     * 
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [telephone_portable] column value.
     * 
     * @return string
     */
    public function getTelephonePortable()
    {

        return $this->telephone_portable;
    }

    /**
     * Get the [numero_taxe_professionnelle] column value.
     * 
     * @return string
     */
    public function getNumeroTaxeProfessionnelle()
    {

        return $this->numero_taxe_professionnelle;
    }

    /**
     * Get the [fax] column value.
     * 
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [fax_entreprise] column value.
     * 
     * @return string
     */
    public function getFaxEntreprise()
    {

        return $this->fax_entreprise;
    }

    /**
     * Get the [ice] column value.
     * 
     * @return string
     */
    public function getIce()
    {

        return $this->ice;
    }

    /**
     * Get the [numero_cnss] column value.
     * 
     * @return string
     */
    public function getNumeroCnss()
    {

        return $this->numero_cnss;
    }

    /**
     * Get the [fonction] column value.
     * 
     * @return string
     */
    public function getFonction()
    {

        return $this->fonction;
    }

    /**
     * Get the [telephone_entreprise] column value.
     * 
     * @return string
     */
    public function getTelephoneEntreprise()
    {

        return $this->telephone_entreprise;
    }

    /**
     * Get the [numero_patente] column value.
     * 
     * @return string
     */
    public function getNumeroPatente()
    {

        return $this->numero_patente;
    }

    /**
     * Get the [email_entreprise] column value.
     * 
     * @return string
     */
    public function getEmailEntreprise()
    {

        return $this->email_entreprise;
    }

    /**
     * Get the [form_juridique] column value.
     * 
     * @return string
     */
    public function getFormJuridique()
    {

        return $this->form_juridique;
    }

    /**
     * Get the [id_region] column value.
     * 
     * @return int
     */
    public function getIdRegion()
    {

        return $this->id_region;
    }

    /**
     * Get the [valide] column value.
     * 
     * @return string
     */
    public function getValide()
    {

        return $this->valide;
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
     * Get the [type_entreprise] column value.
     * 
     * @return string
     */
    public function getTypeEntreprise()
    {

        return $this->type_entreprise;
    }

    /**
     * Get the [motif_rejet] column value.
     * 
     * @return string
     */
    public function getMotifRejet()
    {

        return $this->motif_rejet;
    }

    /**
     * Get the [motif_desactivation] column value.
     * 
     * @return string
     */
    public function getMotifDesactivation()
    {

        return $this->motif_desactivation;
    }

    /**
     * Get the [numero_fournisseur] column value.
     * 
     * @return string
     */
    public function getNumeroFournisseur()
    {

        return $this->numero_fournisseur;
    }

    /**
     * Get the [optionally formatted] temporal [date_creation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_creation === null) {
            return null;
        }

        if ($this->date_creation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_creation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_creation, true), $x);
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
     * Get the [is_connu] column value.
     * 
     * @return string
     */
    public function getIsConnu()
    {

        return $this->is_connu;
    }

    /**
     * Get the [id_entite_demandeur] column value.
     * 
     * @return int
     */
    public function getIdEntiteDemandeur()
    {

        return $this->id_entite_demandeur;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return int
     */
    public function getIdExterne()
    {

        return $this->id_externe;
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [annulee] column value.
     * 
     * @return string
     */
    public function getAnnulee()
    {

        return $this->annulee;
    }

    /**
     * Get the [id_remplacant] column value.
     * 
     * @return int
     */
    public function getIdRemplacant()
    {

        return $this->id_remplacant;
    }

    /**
     * Get the [id_organisme] column value.
     * 
     * @return int
     */
    public function getIdOrganisme()
    {

        return $this->id_organisme;
    }

    /**
     * Get the [id_entite_organisme] column value.
     * 
     * @return int
     */
    public function getIdEntiteOrganisme()
    {

        return $this->id_entite_organisme;
    }

    /**
     * Get the [optionally formatted] temporal [date_dernier_acces] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDernierAcces($format = 'Y-m-d H:i:s')
    {
        if ($this->date_dernier_acces === null) {
            return null;
        }

        if ($this->date_dernier_acces === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_dernier_acces);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_dernier_acces, true), $x);
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
     * Get the [jeton_validation] column value.
     * 
     * @return string
     */
    public function getJetonValidation()
    {

        return $this->jeton_validation;
    }

    /**
     * Get the [statut_enable_account] column value.
     * 
     * @return string
     */
    public function getStatutEnableAccount()
    {

        return $this->statut_enable_account;
    }

    /**
     * Get the [optionally formatted] temporal [date_traitement] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateTraitement($format = 'Y-m-d H:i:s')
    {
        if ($this->date_traitement === null) {
            return null;
        }

        if ($this->date_traitement === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_traitement);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_traitement, true), $x);
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
     * Get the [token_recup] column value.
     * 
     * @return string
     */
    public function getTokenRecup()
    {

        return $this->token_recup;
    }

    /**
     * Get the [optionally formatted] temporal [date_expiration] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateExpiration($format = 'Y-m-d H:i:s')
    {
        if ($this->date_expiration === null) {
            return null;
        }

        if ($this->date_expiration === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_expiration);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_expiration, true), $x);
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
     * Set the value of [id_demandeur] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demandeur !== $v) {
            $this->id_demandeur = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_DEMANDEUR;
        }


        return $this;
    } // setIdDemandeur()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = TDemandeurPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = TDemandeurPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [prenom_fr] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setPrenomFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_fr !== $v) {
            $this->prenom_fr = $v;
            $this->modifiedColumns[] = TDemandeurPeer::PRENOM_FR;
        }


        return $this;
    } // setPrenomFr()

    /**
     * Set the value of [nom_fr] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setNomFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fr !== $v) {
            $this->nom_fr = $v;
            $this->modifiedColumns[] = TDemandeurPeer::NOM_FR;
        }


        return $this;
    } // setNomFr()

    /**
     * Set the value of [raison_sociale] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setRaisonSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale !== $v) {
            $this->raison_sociale = $v;
            $this->modifiedColumns[] = TDemandeurPeer::RAISON_SOCIALE;
        }


        return $this;
    } // setRaisonSociale()

    /**
     * Set the value of [raison_sociale_ar] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setRaisonSocialeAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale_ar !== $v) {
            $this->raison_sociale_ar = $v;
            $this->modifiedColumns[] = TDemandeurPeer::RAISON_SOCIALE_AR;
        }


        return $this;
    } // setRaisonSocialeAr()

    /**
     * Set the value of [type_requerant] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setTypeRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_requerant !== $v) {
            $this->type_requerant = $v;
            $this->modifiedColumns[] = TDemandeurPeer::TYPE_REQUERANT;
        }


        return $this;
    } // setTypeRequerant()

    /**
     * Set the value of [identifiant_fiscal] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdentifiantFiscal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_fiscal !== $v) {
            $this->identifiant_fiscal = $v;
            $this->modifiedColumns[] = TDemandeurPeer::IDENTIFIANT_FISCAL;
        }


        return $this;
    } // setIdentifiantFiscal()

    /**
     * Set the value of [organisation] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setOrganisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisation !== $v) {
            $this->organisation = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ORGANISATION;
        }


        return $this;
    } // setOrganisation()

    /**
     * Set the value of [organisation_ar] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setOrganisationAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisation_ar !== $v) {
            $this->organisation_ar = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ORGANISATION_AR;
        }


        return $this;
    } // setOrganisationAr()

    /**
     * Set the value of [ville_registre_commerce] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setVilleRegistreCommerce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ville_registre_commerce !== $v) {
            $this->ville_registre_commerce = $v;
            $this->modifiedColumns[] = TDemandeurPeer::VILLE_REGISTRE_COMMERCE;
        }


        return $this;
    } // setVilleRegistreCommerce()

    /**
     * Set the value of [numero_registre_commerce] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setNumeroRegistreCommerce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_registre_commerce !== $v) {
            $this->numero_registre_commerce = $v;
            $this->modifiedColumns[] = TDemandeurPeer::NUMERO_REGISTRE_COMMERCE;
        }


        return $this;
    } // setNumeroRegistreCommerce()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [complement_adresse] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setComplementAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->complement_adresse !== $v) {
            $this->complement_adresse = $v;
            $this->modifiedColumns[] = TDemandeurPeer::COMPLEMENT_ADRESSE;
        }


        return $this;
    } // setComplementAdresse()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = TDemandeurPeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = TDemandeurPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = TDemandeurPeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = TDemandeurPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [mot_de_passe_demandeur] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setMotDePasseDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mot_de_passe_demandeur !== $v) {
            $this->mot_de_passe_demandeur = $v;
            $this->modifiedColumns[] = TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR;
        }


        return $this;
    } // setMotDePasseDemandeur()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = TDemandeurPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [telephone_portable] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setTelephonePortable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone_portable !== $v) {
            $this->telephone_portable = $v;
            $this->modifiedColumns[] = TDemandeurPeer::TELEPHONE_PORTABLE;
        }


        return $this;
    } // setTelephonePortable()

    /**
     * Set the value of [numero_taxe_professionnelle] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setNumeroTaxeProfessionnelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_taxe_professionnelle !== $v) {
            $this->numero_taxe_professionnelle = $v;
            $this->modifiedColumns[] = TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE;
        }


        return $this;
    } // setNumeroTaxeProfessionnelle()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = TDemandeurPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [fax_entreprise] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setFaxEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax_entreprise !== $v) {
            $this->fax_entreprise = $v;
            $this->modifiedColumns[] = TDemandeurPeer::FAX_ENTREPRISE;
        }


        return $this;
    } // setFaxEntreprise()

    /**
     * Set the value of [ice] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ice !== $v) {
            $this->ice = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ICE;
        }


        return $this;
    } // setIce()

    /**
     * Set the value of [numero_cnss] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setNumeroCnss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_cnss !== $v) {
            $this->numero_cnss = $v;
            $this->modifiedColumns[] = TDemandeurPeer::NUMERO_CNSS;
        }


        return $this;
    } // setNumeroCnss()

    /**
     * Set the value of [fonction] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setFonction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fonction !== $v) {
            $this->fonction = $v;
            $this->modifiedColumns[] = TDemandeurPeer::FONCTION;
        }


        return $this;
    } // setFonction()

    /**
     * Set the value of [telephone_entreprise] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setTelephoneEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone_entreprise !== $v) {
            $this->telephone_entreprise = $v;
            $this->modifiedColumns[] = TDemandeurPeer::TELEPHONE_ENTREPRISE;
        }


        return $this;
    } // setTelephoneEntreprise()

    /**
     * Set the value of [numero_patente] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setNumeroPatente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_patente !== $v) {
            $this->numero_patente = $v;
            $this->modifiedColumns[] = TDemandeurPeer::NUMERO_PATENTE;
        }


        return $this;
    } // setNumeroPatente()

    /**
     * Set the value of [email_entreprise] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setEmailEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_entreprise !== $v) {
            $this->email_entreprise = $v;
            $this->modifiedColumns[] = TDemandeurPeer::EMAIL_ENTREPRISE;
        }


        return $this;
    } // setEmailEntreprise()

    /**
     * Set the value of [form_juridique] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setFormJuridique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->form_juridique !== $v) {
            $this->form_juridique = $v;
            $this->modifiedColumns[] = TDemandeurPeer::FORM_JURIDIQUE;
        }


        return $this;
    } // setFormJuridique()

    /**
     * Set the value of [id_region] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_region !== $v) {
            $this->id_region = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_REGION;
        }


        return $this;
    } // setIdRegion()

    /**
     * Set the value of [valide] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setValide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valide !== $v) {
            $this->valide = $v;
            $this->modifiedColumns[] = TDemandeurPeer::VALIDE;
        }


        return $this;
    } // setValide()

    /**
     * Set the value of [identifiant_national] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdentifiantNational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_national !== $v) {
            $this->identifiant_national = $v;
            $this->modifiedColumns[] = TDemandeurPeer::IDENTIFIANT_NATIONAL;
        }


        return $this;
    } // setIdentifiantNational()

    /**
     * Set the value of [type_entreprise] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setTypeEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_entreprise !== $v) {
            $this->type_entreprise = $v;
            $this->modifiedColumns[] = TDemandeurPeer::TYPE_ENTREPRISE;
        }


        return $this;
    } // setTypeEntreprise()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = TDemandeurPeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Set the value of [motif_desactivation] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setMotifDesactivation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_desactivation !== $v) {
            $this->motif_desactivation = $v;
            $this->modifiedColumns[] = TDemandeurPeer::MOTIF_DESACTIVATION;
        }


        return $this;
    } // setMotifDesactivation()

    /**
     * Set the value of [numero_fournisseur] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setNumeroFournisseur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_fournisseur !== $v) {
            $this->numero_fournisseur = $v;
            $this->modifiedColumns[] = TDemandeurPeer::NUMERO_FOURNISSEUR;
        }


        return $this;
    } // setNumeroFournisseur()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = TDemandeurPeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [is_connu] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIsConnu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->is_connu !== $v) {
            $this->is_connu = $v;
            $this->modifiedColumns[] = TDemandeurPeer::IS_CONNU;
        }


        return $this;
    } // setIsConnu()

    /**
     * Set the value of [id_entite_demandeur] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdEntiteDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_demandeur !== $v) {
            $this->id_entite_demandeur = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_ENTITE_DEMANDEUR;
        }


        return $this;
    } // setIdEntiteDemandeur()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [annulee] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setAnnulee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annulee !== $v) {
            $this->annulee = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ANNULEE;
        }


        return $this;
    } // setAnnulee()

    /**
     * Set the value of [id_remplacant] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdRemplacant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_remplacant !== $v) {
            $this->id_remplacant = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_REMPLACANT;
        }


        return $this;
    } // setIdRemplacant()

    /**
     * Set the value of [id_organisme] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_organisme !== $v) {
            $this->id_organisme = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_ORGANISME;
        }


        return $this;
    } // setIdOrganisme()

    /**
     * Set the value of [id_entite_organisme] column.
     * 
     * @param int $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setIdEntiteOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_organisme !== $v) {
            $this->id_entite_organisme = $v;
            $this->modifiedColumns[] = TDemandeurPeer::ID_ENTITE_ORGANISME;
        }


        return $this;
    } // setIdEntiteOrganisme()

    /**
     * Sets the value of [date_dernier_acces] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setDateDernierAcces($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_dernier_acces !== null || $dt !== null) {
            $currentDateAsString = ($this->date_dernier_acces !== null && $tmpDt = new DateTime($this->date_dernier_acces)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_dernier_acces = $newDateAsString;
                $this->modifiedColumns[] = TDemandeurPeer::DATE_DERNIER_ACCES;
            }
        } // if either are not null


        return $this;
    } // setDateDernierAcces()

    /**
     * Set the value of [jeton_validation] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setJetonValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jeton_validation !== $v) {
            $this->jeton_validation = $v;
            $this->modifiedColumns[] = TDemandeurPeer::JETON_VALIDATION;
        }


        return $this;
    } // setJetonValidation()

    /**
     * Set the value of [statut_enable_account] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setStatutEnableAccount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_enable_account !== $v) {
            $this->statut_enable_account = $v;
            $this->modifiedColumns[] = TDemandeurPeer::STATUT_ENABLE_ACCOUNT;
        }


        return $this;
    } // setStatutEnableAccount()

    /**
     * Sets the value of [date_traitement] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setDateTraitement($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_traitement !== null || $dt !== null) {
            $currentDateAsString = ($this->date_traitement !== null && $tmpDt = new DateTime($this->date_traitement)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_traitement = $newDateAsString;
                $this->modifiedColumns[] = TDemandeurPeer::DATE_TRAITEMENT;
            }
        } // if either are not null


        return $this;
    } // setDateTraitement()

    /**
     * Set the value of [token_recup] column.
     * 
     * @param string $v new value
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setTokenRecup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->token_recup !== $v) {
            $this->token_recup = $v;
            $this->modifiedColumns[] = TDemandeurPeer::TOKEN_RECUP;
        }


        return $this;
    } // setTokenRecup()

    /**
     * Sets the value of [date_expiration] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TDemandeur The current object (for fluent API support)
     */
    public function setDateExpiration($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_expiration !== null || $dt !== null) {
            $currentDateAsString = ($this->date_expiration !== null && $tmpDt = new DateTime($this->date_expiration)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_expiration = $newDateAsString;
                $this->modifiedColumns[] = TDemandeurPeer::DATE_EXPIRATION;
            }
        } // if either are not null


        return $this;
    } // setDateExpiration()

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
            if ($this->valide !== '0') {
                return false;
            }

            if ($this->type_entreprise !== '0') {
                return false;
            }

            if ($this->is_connu !== '0') {
                return false;
            }

            if ($this->annulee !== '0') {
                return false;
            }

            if ($this->statut_enable_account !== '0') {
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

            $this->id_demandeur = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nom = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->prenom = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->prenom_fr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nom_fr = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->raison_sociale = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->raison_sociale_ar = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->type_requerant = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->identifiant_fiscal = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->organisation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->organisation_ar = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->ville_registre_commerce = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->numero_registre_commerce = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->adresse = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->complement_adresse = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->code_postal = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->ville = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->pays = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->email = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->mot_de_passe_demandeur = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->telephone = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->telephone_portable = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->numero_taxe_professionnelle = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->fax = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->fax_entreprise = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->ice = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->numero_cnss = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->fonction = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->telephone_entreprise = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->numero_patente = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->email_entreprise = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->form_juridique = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->id_region = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->valide = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->identifiant_national = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->type_entreprise = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->motif_rejet = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->motif_desactivation = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->numero_fournisseur = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->date_creation = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->is_connu = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->id_entite_demandeur = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->id_externe = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->id_entite = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->annulee = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->id_remplacant = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->id_organisme = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->id_entite_organisme = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->date_dernier_acces = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->jeton_validation = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->statut_enable_account = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->date_traitement = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->token_recup = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->date_expiration = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 54; // 54 = TDemandeurPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TDemandeur object", $e);
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
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TDemandeurPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TDemandeurQuery::create()
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
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TDemandeurPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TDemandeurPeer::ID_DEMANDEUR;
        if (null !== $this->id_demandeur) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TDemandeurPeer::ID_DEMANDEUR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TDemandeurPeer::ID_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDEUR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`NOM`';
        }
        if ($this->isColumnModified(TDemandeurPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM`';
        }
        if ($this->isColumnModified(TDemandeurPeer::PRENOM_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_FR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::NOM_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_FR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::RAISON_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`RAISON_SOCIALE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::RAISON_SOCIALE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`RAISON_SOCIALE_AR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::TYPE_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_REQUERANT`';
        }
        if ($this->isColumnModified(TDemandeurPeer::IDENTIFIANT_FISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_FISCAL`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ORGANISATION)) {
            $modifiedColumns[':p' . $index++]  = '`ORGANISATION`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ORGANISATION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`ORGANISATION_AR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::VILLE_REGISTRE_COMMERCE)) {
            $modifiedColumns[':p' . $index++]  = '`VILLE_REGISTRE_COMMERCE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_REGISTRE_COMMERCE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_REGISTRE_COMMERCE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`ADRESSE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::COMPLEMENT_ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`COMPLEMENT_ADRESSE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_POSTAL`';
        }
        if ($this->isColumnModified(TDemandeurPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`VILLE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`PAYS`';
        }
        if ($this->isColumnModified(TDemandeurPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL`';
        }
        if ($this->isColumnModified(TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`MOT_DE_PASSE_DEMANDEUR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`TELEPHONE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::TELEPHONE_PORTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`TELEPHONE_PORTABLE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_TAXE_PROFESSIONNELLE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`FAX`';
        }
        if ($this->isColumnModified(TDemandeurPeer::FAX_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`FAX_ENTREPRISE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ICE)) {
            $modifiedColumns[':p' . $index++]  = '`ICE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_CNSS)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_CNSS`';
        }
        if ($this->isColumnModified(TDemandeurPeer::FONCTION)) {
            $modifiedColumns[':p' . $index++]  = '`FONCTION`';
        }
        if ($this->isColumnModified(TDemandeurPeer::TELEPHONE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`TELEPHONE_ENTREPRISE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_PATENTE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_PATENTE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::EMAIL_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL_ENTREPRISE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::FORM_JURIDIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`FORM_JURIDIQUE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ID_REGION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REGION`';
        }
        if ($this->isColumnModified(TDemandeurPeer::VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`VALIDE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::IDENTIFIANT_NATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_NATIONAL`';
        }
        if ($this->isColumnModified(TDemandeurPeer::TYPE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_ENTREPRISE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIF_REJET`';
        }
        if ($this->isColumnModified(TDemandeurPeer::MOTIF_DESACTIVATION)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIF_DESACTIVATION`';
        }
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_FOURNISSEUR)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_FOURNISSEUR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_CREATION`';
        }
        if ($this->isColumnModified(TDemandeurPeer::IS_CONNU)) {
            $modifiedColumns[':p' . $index++]  = '`IS_CONNU`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ID_ENTITE_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_DEMANDEUR`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EXTERNE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ANNULEE)) {
            $modifiedColumns[':p' . $index++]  = '`ANNULEE`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ID_REMPLACANT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REMPLACANT`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ID_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORGANISME`';
        }
        if ($this->isColumnModified(TDemandeurPeer::ID_ENTITE_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_ORGANISME`';
        }
        if ($this->isColumnModified(TDemandeurPeer::DATE_DERNIER_ACCES)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DERNIER_ACCES`';
        }
        if ($this->isColumnModified(TDemandeurPeer::JETON_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`JETON_VALIDATION`';
        }
        if ($this->isColumnModified(TDemandeurPeer::STATUT_ENABLE_ACCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`STATUT_ENABLE_ACCOUNT`';
        }
        if ($this->isColumnModified(TDemandeurPeer::DATE_TRAITEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_TRAITEMENT`';
        }
        if ($this->isColumnModified(TDemandeurPeer::TOKEN_RECUP)) {
            $modifiedColumns[':p' . $index++]  = '`TOKEN_RECUP`';
        }
        if ($this->isColumnModified(TDemandeurPeer::DATE_EXPIRATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_EXPIRATION`';
        }

        $sql = sprintf(
            'INSERT INTO `t_demandeur` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->id_demandeur, PDO::PARAM_INT);
                        break;
                    case '`NOM`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`PRENOM`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_FR`':						
                        $stmt->bindValue($identifier, $this->prenom_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_FR`':						
                        $stmt->bindValue($identifier, $this->nom_fr, PDO::PARAM_STR);
                        break;
                    case '`RAISON_SOCIALE`':						
                        $stmt->bindValue($identifier, $this->raison_sociale, PDO::PARAM_STR);
                        break;
                    case '`RAISON_SOCIALE_AR`':						
                        $stmt->bindValue($identifier, $this->raison_sociale_ar, PDO::PARAM_STR);
                        break;
                    case '`TYPE_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->type_requerant, PDO::PARAM_INT);
                        break;
                    case '`IDENTIFIANT_FISCAL`':						
                        $stmt->bindValue($identifier, $this->identifiant_fiscal, PDO::PARAM_STR);
                        break;
                    case '`ORGANISATION`':						
                        $stmt->bindValue($identifier, $this->organisation, PDO::PARAM_STR);
                        break;
                    case '`ORGANISATION_AR`':						
                        $stmt->bindValue($identifier, $this->organisation_ar, PDO::PARAM_STR);
                        break;
                    case '`VILLE_REGISTRE_COMMERCE`':						
                        $stmt->bindValue($identifier, $this->ville_registre_commerce, PDO::PARAM_INT);
                        break;
                    case '`NUMERO_REGISTRE_COMMERCE`':						
                        $stmt->bindValue($identifier, $this->numero_registre_commerce, PDO::PARAM_STR);
                        break;
                    case '`ADRESSE`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`COMPLEMENT_ADRESSE`':						
                        $stmt->bindValue($identifier, $this->complement_adresse, PDO::PARAM_STR);
                        break;
                    case '`CODE_POSTAL`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_STR);
                        break;
                    case '`VILLE`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`PAYS`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`EMAIL`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`MOT_DE_PASSE_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->mot_de_passe_demandeur, PDO::PARAM_STR);
                        break;
                    case '`TELEPHONE`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`TELEPHONE_PORTABLE`':						
                        $stmt->bindValue($identifier, $this->telephone_portable, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_TAXE_PROFESSIONNELLE`':						
                        $stmt->bindValue($identifier, $this->numero_taxe_professionnelle, PDO::PARAM_STR);
                        break;
                    case '`FAX`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`FAX_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->fax_entreprise, PDO::PARAM_STR);
                        break;
                    case '`ICE`':						
                        $stmt->bindValue($identifier, $this->ice, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_CNSS`':						
                        $stmt->bindValue($identifier, $this->numero_cnss, PDO::PARAM_STR);
                        break;
                    case '`FONCTION`':						
                        $stmt->bindValue($identifier, $this->fonction, PDO::PARAM_STR);
                        break;
                    case '`TELEPHONE_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->telephone_entreprise, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_PATENTE`':						
                        $stmt->bindValue($identifier, $this->numero_patente, PDO::PARAM_STR);
                        break;
                    case '`EMAIL_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->email_entreprise, PDO::PARAM_STR);
                        break;
                    case '`FORM_JURIDIQUE`':						
                        $stmt->bindValue($identifier, $this->form_juridique, PDO::PARAM_STR);
                        break;
                    case '`ID_REGION`':						
                        $stmt->bindValue($identifier, $this->id_region, PDO::PARAM_INT);
                        break;
                    case '`VALIDE`':						
                        $stmt->bindValue($identifier, $this->valide, PDO::PARAM_STR);
                        break;
                    case '`IDENTIFIANT_NATIONAL`':						
                        $stmt->bindValue($identifier, $this->identifiant_national, PDO::PARAM_STR);
                        break;
                    case '`TYPE_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->type_entreprise, PDO::PARAM_STR);
                        break;
                    case '`MOTIF_REJET`':						
                        $stmt->bindValue($identifier, $this->motif_rejet, PDO::PARAM_STR);
                        break;
                    case '`MOTIF_DESACTIVATION`':						
                        $stmt->bindValue($identifier, $this->motif_desactivation, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_FOURNISSEUR`':						
                        $stmt->bindValue($identifier, $this->numero_fournisseur, PDO::PARAM_STR);
                        break;
                    case '`DATE_CREATION`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`IS_CONNU`':						
                        $stmt->bindValue($identifier, $this->is_connu, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->id_entite_demandeur, PDO::PARAM_INT);
                        break;
                    case '`ID_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`ANNULEE`':						
                        $stmt->bindValue($identifier, $this->annulee, PDO::PARAM_STR);
                        break;
                    case '`ID_REMPLACANT`':						
                        $stmt->bindValue($identifier, $this->id_remplacant, PDO::PARAM_INT);
                        break;
                    case '`ID_ORGANISME`':						
                        $stmt->bindValue($identifier, $this->id_organisme, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE_ORGANISME`':						
                        $stmt->bindValue($identifier, $this->id_entite_organisme, PDO::PARAM_INT);
                        break;
                    case '`DATE_DERNIER_ACCES`':						
                        $stmt->bindValue($identifier, $this->date_dernier_acces, PDO::PARAM_STR);
                        break;
                    case '`JETON_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->jeton_validation, PDO::PARAM_STR);
                        break;
                    case '`STATUT_ENABLE_ACCOUNT`':						
                        $stmt->bindValue($identifier, $this->statut_enable_account, PDO::PARAM_STR);
                        break;
                    case '`DATE_TRAITEMENT`':						
                        $stmt->bindValue($identifier, $this->date_traitement, PDO::PARAM_STR);
                        break;
                    case '`TOKEN_RECUP`':						
                        $stmt->bindValue($identifier, $this->token_recup, PDO::PARAM_STR);
                        break;
                    case '`DATE_EXPIRATION`':						
                        $stmt->bindValue($identifier, $this->date_expiration, PDO::PARAM_STR);
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
        $this->setIdDemandeur($pk);

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


            if (($retval = TDemandeurPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TDemandeurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDemandeur();
                break;
            case 1:
                return $this->getNom();
                break;
            case 2:
                return $this->getPrenom();
                break;
            case 3:
                return $this->getPrenomFr();
                break;
            case 4:
                return $this->getNomFr();
                break;
            case 5:
                return $this->getRaisonSociale();
                break;
            case 6:
                return $this->getRaisonSocialeAr();
                break;
            case 7:
                return $this->getTypeRequerant();
                break;
            case 8:
                return $this->getIdentifiantFiscal();
                break;
            case 9:
                return $this->getOrganisation();
                break;
            case 10:
                return $this->getOrganisationAr();
                break;
            case 11:
                return $this->getVilleRegistreCommerce();
                break;
            case 12:
                return $this->getNumeroRegistreCommerce();
                break;
            case 13:
                return $this->getAdresse();
                break;
            case 14:
                return $this->getComplementAdresse();
                break;
            case 15:
                return $this->getCodePostal();
                break;
            case 16:
                return $this->getVille();
                break;
            case 17:
                return $this->getPays();
                break;
            case 18:
                return $this->getEmail();
                break;
            case 19:
                return $this->getMotDePasseDemandeur();
                break;
            case 20:
                return $this->getTelephone();
                break;
            case 21:
                return $this->getTelephonePortable();
                break;
            case 22:
                return $this->getNumeroTaxeProfessionnelle();
                break;
            case 23:
                return $this->getFax();
                break;
            case 24:
                return $this->getFaxEntreprise();
                break;
            case 25:
                return $this->getIce();
                break;
            case 26:
                return $this->getNumeroCnss();
                break;
            case 27:
                return $this->getFonction();
                break;
            case 28:
                return $this->getTelephoneEntreprise();
                break;
            case 29:
                return $this->getNumeroPatente();
                break;
            case 30:
                return $this->getEmailEntreprise();
                break;
            case 31:
                return $this->getFormJuridique();
                break;
            case 32:
                return $this->getIdRegion();
                break;
            case 33:
                return $this->getValide();
                break;
            case 34:
                return $this->getIdentifiantNational();
                break;
            case 35:
                return $this->getTypeEntreprise();
                break;
            case 36:
                return $this->getMotifRejet();
                break;
            case 37:
                return $this->getMotifDesactivation();
                break;
            case 38:
                return $this->getNumeroFournisseur();
                break;
            case 39:
                return $this->getDateCreation();
                break;
            case 40:
                return $this->getIsConnu();
                break;
            case 41:
                return $this->getIdEntiteDemandeur();
                break;
            case 42:
                return $this->getIdExterne();
                break;
            case 43:
                return $this->getIdEntite();
                break;
            case 44:
                return $this->getAnnulee();
                break;
            case 45:
                return $this->getIdRemplacant();
                break;
            case 46:
                return $this->getIdOrganisme();
                break;
            case 47:
                return $this->getIdEntiteOrganisme();
                break;
            case 48:
                return $this->getDateDernierAcces();
                break;
            case 49:
                return $this->getJetonValidation();
                break;
            case 50:
                return $this->getStatutEnableAccount();
                break;
            case 51:
                return $this->getDateTraitement();
                break;
            case 52:
                return $this->getTokenRecup();
                break;
            case 53:
                return $this->getDateExpiration();
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
        if (isset($alreadyDumpedObjects['TDemandeur'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TDemandeur'][$this->getPrimaryKey()] = true;
        $keys = TDemandeurPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDemandeur(),
            $keys[1] => $this->getNom(),
            $keys[2] => $this->getPrenom(),
            $keys[3] => $this->getPrenomFr(),
            $keys[4] => $this->getNomFr(),
            $keys[5] => $this->getRaisonSociale(),
            $keys[6] => $this->getRaisonSocialeAr(),
            $keys[7] => $this->getTypeRequerant(),
            $keys[8] => $this->getIdentifiantFiscal(),
            $keys[9] => $this->getOrganisation(),
            $keys[10] => $this->getOrganisationAr(),
            $keys[11] => $this->getVilleRegistreCommerce(),
            $keys[12] => $this->getNumeroRegistreCommerce(),
            $keys[13] => $this->getAdresse(),
            $keys[14] => $this->getComplementAdresse(),
            $keys[15] => $this->getCodePostal(),
            $keys[16] => $this->getVille(),
            $keys[17] => $this->getPays(),
            $keys[18] => $this->getEmail(),
            $keys[19] => $this->getMotDePasseDemandeur(),
            $keys[20] => $this->getTelephone(),
            $keys[21] => $this->getTelephonePortable(),
            $keys[22] => $this->getNumeroTaxeProfessionnelle(),
            $keys[23] => $this->getFax(),
            $keys[24] => $this->getFaxEntreprise(),
            $keys[25] => $this->getIce(),
            $keys[26] => $this->getNumeroCnss(),
            $keys[27] => $this->getFonction(),
            $keys[28] => $this->getTelephoneEntreprise(),
            $keys[29] => $this->getNumeroPatente(),
            $keys[30] => $this->getEmailEntreprise(),
            $keys[31] => $this->getFormJuridique(),
            $keys[32] => $this->getIdRegion(),
            $keys[33] => $this->getValide(),
            $keys[34] => $this->getIdentifiantNational(),
            $keys[35] => $this->getTypeEntreprise(),
            $keys[36] => $this->getMotifRejet(),
            $keys[37] => $this->getMotifDesactivation(),
            $keys[38] => $this->getNumeroFournisseur(),
            $keys[39] => $this->getDateCreation(),
            $keys[40] => $this->getIsConnu(),
            $keys[41] => $this->getIdEntiteDemandeur(),
            $keys[42] => $this->getIdExterne(),
            $keys[43] => $this->getIdEntite(),
            $keys[44] => $this->getAnnulee(),
            $keys[45] => $this->getIdRemplacant(),
            $keys[46] => $this->getIdOrganisme(),
            $keys[47] => $this->getIdEntiteOrganisme(),
            $keys[48] => $this->getDateDernierAcces(),
            $keys[49] => $this->getJetonValidation(),
            $keys[50] => $this->getStatutEnableAccount(),
            $keys[51] => $this->getDateTraitement(),
            $keys[52] => $this->getTokenRecup(),
            $keys[53] => $this->getDateExpiration(),
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
        $pos = TDemandeurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDemandeur($value);
                break;
            case 1:
                $this->setNom($value);
                break;
            case 2:
                $this->setPrenom($value);
                break;
            case 3:
                $this->setPrenomFr($value);
                break;
            case 4:
                $this->setNomFr($value);
                break;
            case 5:
                $this->setRaisonSociale($value);
                break;
            case 6:
                $this->setRaisonSocialeAr($value);
                break;
            case 7:
                $this->setTypeRequerant($value);
                break;
            case 8:
                $this->setIdentifiantFiscal($value);
                break;
            case 9:
                $this->setOrganisation($value);
                break;
            case 10:
                $this->setOrganisationAr($value);
                break;
            case 11:
                $this->setVilleRegistreCommerce($value);
                break;
            case 12:
                $this->setNumeroRegistreCommerce($value);
                break;
            case 13:
                $this->setAdresse($value);
                break;
            case 14:
                $this->setComplementAdresse($value);
                break;
            case 15:
                $this->setCodePostal($value);
                break;
            case 16:
                $this->setVille($value);
                break;
            case 17:
                $this->setPays($value);
                break;
            case 18:
                $this->setEmail($value);
                break;
            case 19:
                $this->setMotDePasseDemandeur($value);
                break;
            case 20:
                $this->setTelephone($value);
                break;
            case 21:
                $this->setTelephonePortable($value);
                break;
            case 22:
                $this->setNumeroTaxeProfessionnelle($value);
                break;
            case 23:
                $this->setFax($value);
                break;
            case 24:
                $this->setFaxEntreprise($value);
                break;
            case 25:
                $this->setIce($value);
                break;
            case 26:
                $this->setNumeroCnss($value);
                break;
            case 27:
                $this->setFonction($value);
                break;
            case 28:
                $this->setTelephoneEntreprise($value);
                break;
            case 29:
                $this->setNumeroPatente($value);
                break;
            case 30:
                $this->setEmailEntreprise($value);
                break;
            case 31:
                $this->setFormJuridique($value);
                break;
            case 32:
                $this->setIdRegion($value);
                break;
            case 33:
                $this->setValide($value);
                break;
            case 34:
                $this->setIdentifiantNational($value);
                break;
            case 35:
                $this->setTypeEntreprise($value);
                break;
            case 36:
                $this->setMotifRejet($value);
                break;
            case 37:
                $this->setMotifDesactivation($value);
                break;
            case 38:
                $this->setNumeroFournisseur($value);
                break;
            case 39:
                $this->setDateCreation($value);
                break;
            case 40:
                $this->setIsConnu($value);
                break;
            case 41:
                $this->setIdEntiteDemandeur($value);
                break;
            case 42:
                $this->setIdExterne($value);
                break;
            case 43:
                $this->setIdEntite($value);
                break;
            case 44:
                $this->setAnnulee($value);
                break;
            case 45:
                $this->setIdRemplacant($value);
                break;
            case 46:
                $this->setIdOrganisme($value);
                break;
            case 47:
                $this->setIdEntiteOrganisme($value);
                break;
            case 48:
                $this->setDateDernierAcces($value);
                break;
            case 49:
                $this->setJetonValidation($value);
                break;
            case 50:
                $this->setStatutEnableAccount($value);
                break;
            case 51:
                $this->setDateTraitement($value);
                break;
            case 52:
                $this->setTokenRecup($value);
                break;
            case 53:
                $this->setDateExpiration($value);
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
        $keys = TDemandeurPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDemandeur($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNom($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPrenom($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPrenomFr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomFr($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRaisonSociale($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRaisonSocialeAr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTypeRequerant($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdentifiantFiscal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOrganisation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setOrganisationAr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVilleRegistreCommerce($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNumeroRegistreCommerce($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAdresse($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setComplementAdresse($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCodePostal($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setVille($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPays($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEmail($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMotDePasseDemandeur($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTelephone($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTelephonePortable($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setNumeroTaxeProfessionnelle($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFax($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setFaxEntreprise($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setIce($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setNumeroCnss($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setFonction($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTelephoneEntreprise($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setNumeroPatente($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setEmailEntreprise($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFormJuridique($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setIdRegion($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setValide($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setIdentifiantNational($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTypeEntreprise($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setMotifRejet($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setMotifDesactivation($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setNumeroFournisseur($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDateCreation($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setIsConnu($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setIdEntiteDemandeur($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIdExterne($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setIdEntite($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setAnnulee($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setIdRemplacant($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setIdOrganisme($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setIdEntiteOrganisme($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setDateDernierAcces($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setJetonValidation($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setStatutEnableAccount($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDateTraitement($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTokenRecup($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDateExpiration($arr[$keys[53]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TDemandeurPeer::DATABASE_NAME);

        if ($this->isColumnModified(TDemandeurPeer::ID_DEMANDEUR)) $criteria->add(TDemandeurPeer::ID_DEMANDEUR, $this->id_demandeur);
        if ($this->isColumnModified(TDemandeurPeer::NOM)) $criteria->add(TDemandeurPeer::NOM, $this->nom);
        if ($this->isColumnModified(TDemandeurPeer::PRENOM)) $criteria->add(TDemandeurPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(TDemandeurPeer::PRENOM_FR)) $criteria->add(TDemandeurPeer::PRENOM_FR, $this->prenom_fr);
        if ($this->isColumnModified(TDemandeurPeer::NOM_FR)) $criteria->add(TDemandeurPeer::NOM_FR, $this->nom_fr);
        if ($this->isColumnModified(TDemandeurPeer::RAISON_SOCIALE)) $criteria->add(TDemandeurPeer::RAISON_SOCIALE, $this->raison_sociale);
        if ($this->isColumnModified(TDemandeurPeer::RAISON_SOCIALE_AR)) $criteria->add(TDemandeurPeer::RAISON_SOCIALE_AR, $this->raison_sociale_ar);
        if ($this->isColumnModified(TDemandeurPeer::TYPE_REQUERANT)) $criteria->add(TDemandeurPeer::TYPE_REQUERANT, $this->type_requerant);
        if ($this->isColumnModified(TDemandeurPeer::IDENTIFIANT_FISCAL)) $criteria->add(TDemandeurPeer::IDENTIFIANT_FISCAL, $this->identifiant_fiscal);
        if ($this->isColumnModified(TDemandeurPeer::ORGANISATION)) $criteria->add(TDemandeurPeer::ORGANISATION, $this->organisation);
        if ($this->isColumnModified(TDemandeurPeer::ORGANISATION_AR)) $criteria->add(TDemandeurPeer::ORGANISATION_AR, $this->organisation_ar);
        if ($this->isColumnModified(TDemandeurPeer::VILLE_REGISTRE_COMMERCE)) $criteria->add(TDemandeurPeer::VILLE_REGISTRE_COMMERCE, $this->ville_registre_commerce);
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_REGISTRE_COMMERCE)) $criteria->add(TDemandeurPeer::NUMERO_REGISTRE_COMMERCE, $this->numero_registre_commerce);
        if ($this->isColumnModified(TDemandeurPeer::ADRESSE)) $criteria->add(TDemandeurPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(TDemandeurPeer::COMPLEMENT_ADRESSE)) $criteria->add(TDemandeurPeer::COMPLEMENT_ADRESSE, $this->complement_adresse);
        if ($this->isColumnModified(TDemandeurPeer::CODE_POSTAL)) $criteria->add(TDemandeurPeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(TDemandeurPeer::VILLE)) $criteria->add(TDemandeurPeer::VILLE, $this->ville);
        if ($this->isColumnModified(TDemandeurPeer::PAYS)) $criteria->add(TDemandeurPeer::PAYS, $this->pays);
        if ($this->isColumnModified(TDemandeurPeer::EMAIL)) $criteria->add(TDemandeurPeer::EMAIL, $this->email);
        if ($this->isColumnModified(TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR)) $criteria->add(TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR, $this->mot_de_passe_demandeur);
        if ($this->isColumnModified(TDemandeurPeer::TELEPHONE)) $criteria->add(TDemandeurPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(TDemandeurPeer::TELEPHONE_PORTABLE)) $criteria->add(TDemandeurPeer::TELEPHONE_PORTABLE, $this->telephone_portable);
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE)) $criteria->add(TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE, $this->numero_taxe_professionnelle);
        if ($this->isColumnModified(TDemandeurPeer::FAX)) $criteria->add(TDemandeurPeer::FAX, $this->fax);
        if ($this->isColumnModified(TDemandeurPeer::FAX_ENTREPRISE)) $criteria->add(TDemandeurPeer::FAX_ENTREPRISE, $this->fax_entreprise);
        if ($this->isColumnModified(TDemandeurPeer::ICE)) $criteria->add(TDemandeurPeer::ICE, $this->ice);
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_CNSS)) $criteria->add(TDemandeurPeer::NUMERO_CNSS, $this->numero_cnss);
        if ($this->isColumnModified(TDemandeurPeer::FONCTION)) $criteria->add(TDemandeurPeer::FONCTION, $this->fonction);
        if ($this->isColumnModified(TDemandeurPeer::TELEPHONE_ENTREPRISE)) $criteria->add(TDemandeurPeer::TELEPHONE_ENTREPRISE, $this->telephone_entreprise);
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_PATENTE)) $criteria->add(TDemandeurPeer::NUMERO_PATENTE, $this->numero_patente);
        if ($this->isColumnModified(TDemandeurPeer::EMAIL_ENTREPRISE)) $criteria->add(TDemandeurPeer::EMAIL_ENTREPRISE, $this->email_entreprise);
        if ($this->isColumnModified(TDemandeurPeer::FORM_JURIDIQUE)) $criteria->add(TDemandeurPeer::FORM_JURIDIQUE, $this->form_juridique);
        if ($this->isColumnModified(TDemandeurPeer::ID_REGION)) $criteria->add(TDemandeurPeer::ID_REGION, $this->id_region);
        if ($this->isColumnModified(TDemandeurPeer::VALIDE)) $criteria->add(TDemandeurPeer::VALIDE, $this->valide);
        if ($this->isColumnModified(TDemandeurPeer::IDENTIFIANT_NATIONAL)) $criteria->add(TDemandeurPeer::IDENTIFIANT_NATIONAL, $this->identifiant_national);
        if ($this->isColumnModified(TDemandeurPeer::TYPE_ENTREPRISE)) $criteria->add(TDemandeurPeer::TYPE_ENTREPRISE, $this->type_entreprise);
        if ($this->isColumnModified(TDemandeurPeer::MOTIF_REJET)) $criteria->add(TDemandeurPeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(TDemandeurPeer::MOTIF_DESACTIVATION)) $criteria->add(TDemandeurPeer::MOTIF_DESACTIVATION, $this->motif_desactivation);
        if ($this->isColumnModified(TDemandeurPeer::NUMERO_FOURNISSEUR)) $criteria->add(TDemandeurPeer::NUMERO_FOURNISSEUR, $this->numero_fournisseur);
        if ($this->isColumnModified(TDemandeurPeer::DATE_CREATION)) $criteria->add(TDemandeurPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(TDemandeurPeer::IS_CONNU)) $criteria->add(TDemandeurPeer::IS_CONNU, $this->is_connu);
        if ($this->isColumnModified(TDemandeurPeer::ID_ENTITE_DEMANDEUR)) $criteria->add(TDemandeurPeer::ID_ENTITE_DEMANDEUR, $this->id_entite_demandeur);
        if ($this->isColumnModified(TDemandeurPeer::ID_EXTERNE)) $criteria->add(TDemandeurPeer::ID_EXTERNE, $this->id_externe);
        if ($this->isColumnModified(TDemandeurPeer::ID_ENTITE)) $criteria->add(TDemandeurPeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(TDemandeurPeer::ANNULEE)) $criteria->add(TDemandeurPeer::ANNULEE, $this->annulee);
        if ($this->isColumnModified(TDemandeurPeer::ID_REMPLACANT)) $criteria->add(TDemandeurPeer::ID_REMPLACANT, $this->id_remplacant);
        if ($this->isColumnModified(TDemandeurPeer::ID_ORGANISME)) $criteria->add(TDemandeurPeer::ID_ORGANISME, $this->id_organisme);
        if ($this->isColumnModified(TDemandeurPeer::ID_ENTITE_ORGANISME)) $criteria->add(TDemandeurPeer::ID_ENTITE_ORGANISME, $this->id_entite_organisme);
        if ($this->isColumnModified(TDemandeurPeer::DATE_DERNIER_ACCES)) $criteria->add(TDemandeurPeer::DATE_DERNIER_ACCES, $this->date_dernier_acces);
        if ($this->isColumnModified(TDemandeurPeer::JETON_VALIDATION)) $criteria->add(TDemandeurPeer::JETON_VALIDATION, $this->jeton_validation);
        if ($this->isColumnModified(TDemandeurPeer::STATUT_ENABLE_ACCOUNT)) $criteria->add(TDemandeurPeer::STATUT_ENABLE_ACCOUNT, $this->statut_enable_account);
        if ($this->isColumnModified(TDemandeurPeer::DATE_TRAITEMENT)) $criteria->add(TDemandeurPeer::DATE_TRAITEMENT, $this->date_traitement);
        if ($this->isColumnModified(TDemandeurPeer::TOKEN_RECUP)) $criteria->add(TDemandeurPeer::TOKEN_RECUP, $this->token_recup);
        if ($this->isColumnModified(TDemandeurPeer::DATE_EXPIRATION)) $criteria->add(TDemandeurPeer::DATE_EXPIRATION, $this->date_expiration);

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
        $criteria = new Criteria(TDemandeurPeer::DATABASE_NAME);
        $criteria->add(TDemandeurPeer::ID_DEMANDEUR, $this->id_demandeur);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdDemandeur();
    }

    /**
     * Generic method to set the primary key (id_demandeur column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdDemandeur($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdDemandeur();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TDemandeur (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setPrenomFr($this->getPrenomFr());
        $copyObj->setNomFr($this->getNomFr());
        $copyObj->setRaisonSociale($this->getRaisonSociale());
        $copyObj->setRaisonSocialeAr($this->getRaisonSocialeAr());
        $copyObj->setTypeRequerant($this->getTypeRequerant());
        $copyObj->setIdentifiantFiscal($this->getIdentifiantFiscal());
        $copyObj->setOrganisation($this->getOrganisation());
        $copyObj->setOrganisationAr($this->getOrganisationAr());
        $copyObj->setVilleRegistreCommerce($this->getVilleRegistreCommerce());
        $copyObj->setNumeroRegistreCommerce($this->getNumeroRegistreCommerce());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setComplementAdresse($this->getComplementAdresse());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setPays($this->getPays());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setMotDePasseDemandeur($this->getMotDePasseDemandeur());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setTelephonePortable($this->getTelephonePortable());
        $copyObj->setNumeroTaxeProfessionnelle($this->getNumeroTaxeProfessionnelle());
        $copyObj->setFax($this->getFax());
        $copyObj->setFaxEntreprise($this->getFaxEntreprise());
        $copyObj->setIce($this->getIce());
        $copyObj->setNumeroCnss($this->getNumeroCnss());
        $copyObj->setFonction($this->getFonction());
        $copyObj->setTelephoneEntreprise($this->getTelephoneEntreprise());
        $copyObj->setNumeroPatente($this->getNumeroPatente());
        $copyObj->setEmailEntreprise($this->getEmailEntreprise());
        $copyObj->setFormJuridique($this->getFormJuridique());
        $copyObj->setIdRegion($this->getIdRegion());
        $copyObj->setValide($this->getValide());
        $copyObj->setIdentifiantNational($this->getIdentifiantNational());
        $copyObj->setTypeEntreprise($this->getTypeEntreprise());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setMotifDesactivation($this->getMotifDesactivation());
        $copyObj->setNumeroFournisseur($this->getNumeroFournisseur());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setIsConnu($this->getIsConnu());
        $copyObj->setIdEntiteDemandeur($this->getIdEntiteDemandeur());
        $copyObj->setIdExterne($this->getIdExterne());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setAnnulee($this->getAnnulee());
        $copyObj->setIdRemplacant($this->getIdRemplacant());
        $copyObj->setIdOrganisme($this->getIdOrganisme());
        $copyObj->setIdEntiteOrganisme($this->getIdEntiteOrganisme());
        $copyObj->setDateDernierAcces($this->getDateDernierAcces());
        $copyObj->setJetonValidation($this->getJetonValidation());
        $copyObj->setStatutEnableAccount($this->getStatutEnableAccount());
        $copyObj->setDateTraitement($this->getDateTraitement());
        $copyObj->setTokenRecup($this->getTokenRecup());
        $copyObj->setDateExpiration($this->getDateExpiration());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdDemandeur(NULL); // this is a auto-increment column, so set to default value
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
     * @return TDemandeur Clone of current object.
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
     * @return TDemandeurPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TDemandeurPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_demandeur = null;
        $this->nom = null;
        $this->prenom = null;
        $this->prenom_fr = null;
        $this->nom_fr = null;
        $this->raison_sociale = null;
        $this->raison_sociale_ar = null;
        $this->type_requerant = null;
        $this->identifiant_fiscal = null;
        $this->organisation = null;
        $this->organisation_ar = null;
        $this->ville_registre_commerce = null;
        $this->numero_registre_commerce = null;
        $this->adresse = null;
        $this->complement_adresse = null;
        $this->code_postal = null;
        $this->ville = null;
        $this->pays = null;
        $this->email = null;
        $this->mot_de_passe_demandeur = null;
        $this->telephone = null;
        $this->telephone_portable = null;
        $this->numero_taxe_professionnelle = null;
        $this->fax = null;
        $this->fax_entreprise = null;
        $this->ice = null;
        $this->numero_cnss = null;
        $this->fonction = null;
        $this->telephone_entreprise = null;
        $this->numero_patente = null;
        $this->email_entreprise = null;
        $this->form_juridique = null;
        $this->id_region = null;
        $this->valide = null;
        $this->identifiant_national = null;
        $this->type_entreprise = null;
        $this->motif_rejet = null;
        $this->motif_desactivation = null;
        $this->numero_fournisseur = null;
        $this->date_creation = null;
        $this->is_connu = null;
        $this->id_entite_demandeur = null;
        $this->id_externe = null;
        $this->id_entite = null;
        $this->annulee = null;
        $this->id_remplacant = null;
        $this->id_organisme = null;
        $this->id_entite_organisme = null;
        $this->date_dernier_acces = null;
        $this->jeton_validation = null;
        $this->statut_enable_account = null;
        $this->date_traitement = null;
        $this->token_recup = null;
        $this->date_expiration = null;
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
        return (string) $this->exportTo(TDemandeurPeer::DEFAULT_STRING_FORMAT);
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
