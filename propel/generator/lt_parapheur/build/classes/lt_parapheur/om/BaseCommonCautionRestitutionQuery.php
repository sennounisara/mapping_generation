<?php


/**
 * Base class that represents a query for the 'caution_restitution' table.
 *
 * 
 *
 * @method CommonCautionRestitutionQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method CommonCautionRestitutionQuery orderByIdCautionDemande($order = Criteria::ASC) Order by the ID_CAUTION_DEMANDE column
 * @method CommonCautionRestitutionQuery orderByIdEntreprise($order = Criteria::ASC) Order by the ID_ENTREPRISE column
 * @method CommonCautionRestitutionQuery orderByIdInscrit($order = Criteria::ASC) Order by the ID_INSCRIT column
 * @method CommonCautionRestitutionQuery orderByRaisonSociale($order = Criteria::ASC) Order by the RAISON_SOCIALE column
 * @method CommonCautionRestitutionQuery orderByRefConsultation($order = Criteria::ASC) Order by the REF_CONSULTATION column
 * @method CommonCautionRestitutionQuery orderByAcronymeOrg($order = Criteria::ASC) Order by the ACRONYME_ORG column
 * @method CommonCautionRestitutionQuery orderByIdAcheteurService($order = Criteria::ASC) Order by the ID_ACHETEUR_SERVICE column
 * @method CommonCautionRestitutionQuery orderByIdStatut($order = Criteria::ASC) Order by the ID_STATUT column
 * @method CommonCautionRestitutionQuery orderByTypeAnnulation($order = Criteria::ASC) Order by the TYPE_ANNULATION column
 * @method CommonCautionRestitutionQuery orderByNumCompteVirement($order = Criteria::ASC) Order by the NUM_COMPTE_VIREMENT column
 * @method CommonCautionRestitutionQuery orderByIdBlobDemande($order = Criteria::ASC) Order by the ID_BLOB_DEMANDE column
 * @method CommonCautionRestitutionQuery orderByNomDocDemande($order = Criteria::ASC) Order by the NOM_DOC_DEMANDE column
 * @method CommonCautionRestitutionQuery orderByIdBlobMainlevee($order = Criteria::ASC) Order by the ID_BLOB_MAINLEVEE column
 * @method CommonCautionRestitutionQuery orderByNomDocMainlevee($order = Criteria::ASC) Order by the NOM_DOC_MAINLEVEE column
 * @method CommonCautionRestitutionQuery orderByDateCrea($order = Criteria::ASC) Order by the DATE_CREA column
 * @method CommonCautionRestitutionQuery orderByDateModif($order = Criteria::ASC) Order by the DATE_MODIF column
 * @method CommonCautionRestitutionQuery orderByDateDepot($order = Criteria::ASC) Order by the DATE_DEPOT column
 * @method CommonCautionRestitutionQuery orderByMotifRejetAcheteur($order = Criteria::ASC) Order by the MOTIF_REJET_ACHETEUR column
 * @method CommonCautionRestitutionQuery orderByIdAgentAcheteurGenerationMainlevee($order = Criteria::ASC) Order by the ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE column
 * @method CommonCautionRestitutionQuery orderByIdAgentAcheteurSignataire($order = Criteria::ASC) Order by the ID_AGENT_ACHETEUR_SIGNATAIRE column
 * @method CommonCautionRestitutionQuery orderByIdAgentAcheteurValidation($order = Criteria::ASC) Order by the ID_AGENT_ACHETEUR_VALIDATION column
 * @method CommonCautionRestitutionQuery orderByIdAgentAcheteurRejet($order = Criteria::ASC) Order by the ID_AGENT_ACHETEUR_REJET column
 * @method CommonCautionRestitutionQuery orderByDateGenerationMainlevee($order = Criteria::ASC) Order by the DATE_GENERATION_MAINLEVEE column
 * @method CommonCautionRestitutionQuery orderByDateSignature($order = Criteria::ASC) Order by the DATE_SIGNATURE column
 * @method CommonCautionRestitutionQuery orderByDateValidationAcheteur($order = Criteria::ASC) Order by the DATE_VALIDATION_ACHETEUR column
 * @method CommonCautionRestitutionQuery orderByDateRejetAcheteur($order = Criteria::ASC) Order by the DATE_REJET_ACHETEUR column
 * @method CommonCautionRestitutionQuery orderByDatePriseEnChargeBanque($order = Criteria::ASC) Order by the DATE_PRISE_EN_CHARGE_BANQUE column
 * @method CommonCautionRestitutionQuery orderByDateValidationBanque($order = Criteria::ASC) Order by the DATE_VALIDATION_BANQUE column
 * @method CommonCautionRestitutionQuery orderByDateRejetBanque($order = Criteria::ASC) Order by the DATE_REJET_BANQUE column
 * @method CommonCautionRestitutionQuery orderByIdAgentBanquierPriseEnCharge($order = Criteria::ASC) Order by the ID_AGENT_BANQUIER_PRISE_EN_CHARGE column
 * @method CommonCautionRestitutionQuery orderByIdAgentBanquierValidation($order = Criteria::ASC) Order by the ID_AGENT_BANQUIER_VALIDATION column
 * @method CommonCautionRestitutionQuery orderByIdAgentBanquierRejet($order = Criteria::ASC) Order by the ID_AGENT_BANQUIER_REJET column
 * @method CommonCautionRestitutionQuery orderByMotifRejetBanquier($order = Criteria::ASC) Order by the MOTIF_REJET_BANQUIER column
 * @method CommonCautionRestitutionQuery orderByIdVille($order = Criteria::ASC) Order by the ID_VILLE column
 * @method CommonCautionRestitutionQuery orderByCodeAgence($order = Criteria::ASC) Order by the CODE_AGENCE column
 * @method CommonCautionRestitutionQuery orderByCodeVille($order = Criteria::ASC) Order by the CODE_VILLE column
 *
 * @method CommonCautionRestitutionQuery groupById() Group by the ID column
 * @method CommonCautionRestitutionQuery groupByIdCautionDemande() Group by the ID_CAUTION_DEMANDE column
 * @method CommonCautionRestitutionQuery groupByIdEntreprise() Group by the ID_ENTREPRISE column
 * @method CommonCautionRestitutionQuery groupByIdInscrit() Group by the ID_INSCRIT column
 * @method CommonCautionRestitutionQuery groupByRaisonSociale() Group by the RAISON_SOCIALE column
 * @method CommonCautionRestitutionQuery groupByRefConsultation() Group by the REF_CONSULTATION column
 * @method CommonCautionRestitutionQuery groupByAcronymeOrg() Group by the ACRONYME_ORG column
 * @method CommonCautionRestitutionQuery groupByIdAcheteurService() Group by the ID_ACHETEUR_SERVICE column
 * @method CommonCautionRestitutionQuery groupByIdStatut() Group by the ID_STATUT column
 * @method CommonCautionRestitutionQuery groupByTypeAnnulation() Group by the TYPE_ANNULATION column
 * @method CommonCautionRestitutionQuery groupByNumCompteVirement() Group by the NUM_COMPTE_VIREMENT column
 * @method CommonCautionRestitutionQuery groupByIdBlobDemande() Group by the ID_BLOB_DEMANDE column
 * @method CommonCautionRestitutionQuery groupByNomDocDemande() Group by the NOM_DOC_DEMANDE column
 * @method CommonCautionRestitutionQuery groupByIdBlobMainlevee() Group by the ID_BLOB_MAINLEVEE column
 * @method CommonCautionRestitutionQuery groupByNomDocMainlevee() Group by the NOM_DOC_MAINLEVEE column
 * @method CommonCautionRestitutionQuery groupByDateCrea() Group by the DATE_CREA column
 * @method CommonCautionRestitutionQuery groupByDateModif() Group by the DATE_MODIF column
 * @method CommonCautionRestitutionQuery groupByDateDepot() Group by the DATE_DEPOT column
 * @method CommonCautionRestitutionQuery groupByMotifRejetAcheteur() Group by the MOTIF_REJET_ACHETEUR column
 * @method CommonCautionRestitutionQuery groupByIdAgentAcheteurGenerationMainlevee() Group by the ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE column
 * @method CommonCautionRestitutionQuery groupByIdAgentAcheteurSignataire() Group by the ID_AGENT_ACHETEUR_SIGNATAIRE column
 * @method CommonCautionRestitutionQuery groupByIdAgentAcheteurValidation() Group by the ID_AGENT_ACHETEUR_VALIDATION column
 * @method CommonCautionRestitutionQuery groupByIdAgentAcheteurRejet() Group by the ID_AGENT_ACHETEUR_REJET column
 * @method CommonCautionRestitutionQuery groupByDateGenerationMainlevee() Group by the DATE_GENERATION_MAINLEVEE column
 * @method CommonCautionRestitutionQuery groupByDateSignature() Group by the DATE_SIGNATURE column
 * @method CommonCautionRestitutionQuery groupByDateValidationAcheteur() Group by the DATE_VALIDATION_ACHETEUR column
 * @method CommonCautionRestitutionQuery groupByDateRejetAcheteur() Group by the DATE_REJET_ACHETEUR column
 * @method CommonCautionRestitutionQuery groupByDatePriseEnChargeBanque() Group by the DATE_PRISE_EN_CHARGE_BANQUE column
 * @method CommonCautionRestitutionQuery groupByDateValidationBanque() Group by the DATE_VALIDATION_BANQUE column
 * @method CommonCautionRestitutionQuery groupByDateRejetBanque() Group by the DATE_REJET_BANQUE column
 * @method CommonCautionRestitutionQuery groupByIdAgentBanquierPriseEnCharge() Group by the ID_AGENT_BANQUIER_PRISE_EN_CHARGE column
 * @method CommonCautionRestitutionQuery groupByIdAgentBanquierValidation() Group by the ID_AGENT_BANQUIER_VALIDATION column
 * @method CommonCautionRestitutionQuery groupByIdAgentBanquierRejet() Group by the ID_AGENT_BANQUIER_REJET column
 * @method CommonCautionRestitutionQuery groupByMotifRejetBanquier() Group by the MOTIF_REJET_BANQUIER column
 * @method CommonCautionRestitutionQuery groupByIdVille() Group by the ID_VILLE column
 * @method CommonCautionRestitutionQuery groupByCodeAgence() Group by the CODE_AGENCE column
 * @method CommonCautionRestitutionQuery groupByCodeVille() Group by the CODE_VILLE column
 *
 * @method CommonCautionRestitutionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionRestitutionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionRestitutionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionRestitutionQuery leftJoinCommonCautionDemande($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemande relation
 * @method CommonCautionRestitutionQuery rightJoinCommonCautionDemande($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemande relation
 * @method CommonCautionRestitutionQuery innerJoinCommonCautionDemande($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemande relation
 *
 * @method CommonCautionRestitution findOne(PropelPDO $con = null) Return the first CommonCautionRestitution matching the query
 * @method CommonCautionRestitution findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionRestitution matching the query, or a new CommonCautionRestitution object populated from the query conditions when no match is found
 *
 * @method CommonCautionRestitution findOneByIdCautionDemande(int $ID_CAUTION_DEMANDE) Return the first CommonCautionRestitution filtered by the ID_CAUTION_DEMANDE column
 * @method CommonCautionRestitution findOneByIdEntreprise(int $ID_ENTREPRISE) Return the first CommonCautionRestitution filtered by the ID_ENTREPRISE column
 * @method CommonCautionRestitution findOneByIdInscrit(int $ID_INSCRIT) Return the first CommonCautionRestitution filtered by the ID_INSCRIT column
 * @method CommonCautionRestitution findOneByRaisonSociale(string $RAISON_SOCIALE) Return the first CommonCautionRestitution filtered by the RAISON_SOCIALE column
 * @method CommonCautionRestitution findOneByRefConsultation(int $REF_CONSULTATION) Return the first CommonCautionRestitution filtered by the REF_CONSULTATION column
 * @method CommonCautionRestitution findOneByAcronymeOrg(string $ACRONYME_ORG) Return the first CommonCautionRestitution filtered by the ACRONYME_ORG column
 * @method CommonCautionRestitution findOneByIdAcheteurService(int $ID_ACHETEUR_SERVICE) Return the first CommonCautionRestitution filtered by the ID_ACHETEUR_SERVICE column
 * @method CommonCautionRestitution findOneByIdStatut(int $ID_STATUT) Return the first CommonCautionRestitution filtered by the ID_STATUT column
 * @method CommonCautionRestitution findOneByTypeAnnulation(string $TYPE_ANNULATION) Return the first CommonCautionRestitution filtered by the TYPE_ANNULATION column
 * @method CommonCautionRestitution findOneByNumCompteVirement(string $NUM_COMPTE_VIREMENT) Return the first CommonCautionRestitution filtered by the NUM_COMPTE_VIREMENT column
 * @method CommonCautionRestitution findOneByIdBlobDemande(int $ID_BLOB_DEMANDE) Return the first CommonCautionRestitution filtered by the ID_BLOB_DEMANDE column
 * @method CommonCautionRestitution findOneByNomDocDemande(string $NOM_DOC_DEMANDE) Return the first CommonCautionRestitution filtered by the NOM_DOC_DEMANDE column
 * @method CommonCautionRestitution findOneByIdBlobMainlevee(int $ID_BLOB_MAINLEVEE) Return the first CommonCautionRestitution filtered by the ID_BLOB_MAINLEVEE column
 * @method CommonCautionRestitution findOneByNomDocMainlevee(string $NOM_DOC_MAINLEVEE) Return the first CommonCautionRestitution filtered by the NOM_DOC_MAINLEVEE column
 * @method CommonCautionRestitution findOneByDateCrea(string $DATE_CREA) Return the first CommonCautionRestitution filtered by the DATE_CREA column
 * @method CommonCautionRestitution findOneByDateModif(string $DATE_MODIF) Return the first CommonCautionRestitution filtered by the DATE_MODIF column
 * @method CommonCautionRestitution findOneByDateDepot(string $DATE_DEPOT) Return the first CommonCautionRestitution filtered by the DATE_DEPOT column
 * @method CommonCautionRestitution findOneByMotifRejetAcheteur(string $MOTIF_REJET_ACHETEUR) Return the first CommonCautionRestitution filtered by the MOTIF_REJET_ACHETEUR column
 * @method CommonCautionRestitution findOneByIdAgentAcheteurGenerationMainlevee(int $ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE) Return the first CommonCautionRestitution filtered by the ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE column
 * @method CommonCautionRestitution findOneByIdAgentAcheteurSignataire(int $ID_AGENT_ACHETEUR_SIGNATAIRE) Return the first CommonCautionRestitution filtered by the ID_AGENT_ACHETEUR_SIGNATAIRE column
 * @method CommonCautionRestitution findOneByIdAgentAcheteurValidation(int $ID_AGENT_ACHETEUR_VALIDATION) Return the first CommonCautionRestitution filtered by the ID_AGENT_ACHETEUR_VALIDATION column
 * @method CommonCautionRestitution findOneByIdAgentAcheteurRejet(int $ID_AGENT_ACHETEUR_REJET) Return the first CommonCautionRestitution filtered by the ID_AGENT_ACHETEUR_REJET column
 * @method CommonCautionRestitution findOneByDateGenerationMainlevee(string $DATE_GENERATION_MAINLEVEE) Return the first CommonCautionRestitution filtered by the DATE_GENERATION_MAINLEVEE column
 * @method CommonCautionRestitution findOneByDateSignature(string $DATE_SIGNATURE) Return the first CommonCautionRestitution filtered by the DATE_SIGNATURE column
 * @method CommonCautionRestitution findOneByDateValidationAcheteur(string $DATE_VALIDATION_ACHETEUR) Return the first CommonCautionRestitution filtered by the DATE_VALIDATION_ACHETEUR column
 * @method CommonCautionRestitution findOneByDateRejetAcheteur(string $DATE_REJET_ACHETEUR) Return the first CommonCautionRestitution filtered by the DATE_REJET_ACHETEUR column
 * @method CommonCautionRestitution findOneByDatePriseEnChargeBanque(string $DATE_PRISE_EN_CHARGE_BANQUE) Return the first CommonCautionRestitution filtered by the DATE_PRISE_EN_CHARGE_BANQUE column
 * @method CommonCautionRestitution findOneByDateValidationBanque(string $DATE_VALIDATION_BANQUE) Return the first CommonCautionRestitution filtered by the DATE_VALIDATION_BANQUE column
 * @method CommonCautionRestitution findOneByDateRejetBanque(string $DATE_REJET_BANQUE) Return the first CommonCautionRestitution filtered by the DATE_REJET_BANQUE column
 * @method CommonCautionRestitution findOneByIdAgentBanquierPriseEnCharge(int $ID_AGENT_BANQUIER_PRISE_EN_CHARGE) Return the first CommonCautionRestitution filtered by the ID_AGENT_BANQUIER_PRISE_EN_CHARGE column
 * @method CommonCautionRestitution findOneByIdAgentBanquierValidation(int $ID_AGENT_BANQUIER_VALIDATION) Return the first CommonCautionRestitution filtered by the ID_AGENT_BANQUIER_VALIDATION column
 * @method CommonCautionRestitution findOneByIdAgentBanquierRejet(int $ID_AGENT_BANQUIER_REJET) Return the first CommonCautionRestitution filtered by the ID_AGENT_BANQUIER_REJET column
 * @method CommonCautionRestitution findOneByMotifRejetBanquier(string $MOTIF_REJET_BANQUIER) Return the first CommonCautionRestitution filtered by the MOTIF_REJET_BANQUIER column
 * @method CommonCautionRestitution findOneByIdVille(int $ID_VILLE) Return the first CommonCautionRestitution filtered by the ID_VILLE column
 * @method CommonCautionRestitution findOneByCodeAgence(string $CODE_AGENCE) Return the first CommonCautionRestitution filtered by the CODE_AGENCE column
 * @method CommonCautionRestitution findOneByCodeVille(string $CODE_VILLE) Return the first CommonCautionRestitution filtered by the CODE_VILLE column
 *
 * @method array findById(int $ID) Return CommonCautionRestitution objects filtered by the ID column
 * @method array findByIdCautionDemande(int $ID_CAUTION_DEMANDE) Return CommonCautionRestitution objects filtered by the ID_CAUTION_DEMANDE column
 * @method array findByIdEntreprise(int $ID_ENTREPRISE) Return CommonCautionRestitution objects filtered by the ID_ENTREPRISE column
 * @method array findByIdInscrit(int $ID_INSCRIT) Return CommonCautionRestitution objects filtered by the ID_INSCRIT column
 * @method array findByRaisonSociale(string $RAISON_SOCIALE) Return CommonCautionRestitution objects filtered by the RAISON_SOCIALE column
 * @method array findByRefConsultation(int $REF_CONSULTATION) Return CommonCautionRestitution objects filtered by the REF_CONSULTATION column
 * @method array findByAcronymeOrg(string $ACRONYME_ORG) Return CommonCautionRestitution objects filtered by the ACRONYME_ORG column
 * @method array findByIdAcheteurService(int $ID_ACHETEUR_SERVICE) Return CommonCautionRestitution objects filtered by the ID_ACHETEUR_SERVICE column
 * @method array findByIdStatut(int $ID_STATUT) Return CommonCautionRestitution objects filtered by the ID_STATUT column
 * @method array findByTypeAnnulation(string $TYPE_ANNULATION) Return CommonCautionRestitution objects filtered by the TYPE_ANNULATION column
 * @method array findByNumCompteVirement(string $NUM_COMPTE_VIREMENT) Return CommonCautionRestitution objects filtered by the NUM_COMPTE_VIREMENT column
 * @method array findByIdBlobDemande(int $ID_BLOB_DEMANDE) Return CommonCautionRestitution objects filtered by the ID_BLOB_DEMANDE column
 * @method array findByNomDocDemande(string $NOM_DOC_DEMANDE) Return CommonCautionRestitution objects filtered by the NOM_DOC_DEMANDE column
 * @method array findByIdBlobMainlevee(int $ID_BLOB_MAINLEVEE) Return CommonCautionRestitution objects filtered by the ID_BLOB_MAINLEVEE column
 * @method array findByNomDocMainlevee(string $NOM_DOC_MAINLEVEE) Return CommonCautionRestitution objects filtered by the NOM_DOC_MAINLEVEE column
 * @method array findByDateCrea(string $DATE_CREA) Return CommonCautionRestitution objects filtered by the DATE_CREA column
 * @method array findByDateModif(string $DATE_MODIF) Return CommonCautionRestitution objects filtered by the DATE_MODIF column
 * @method array findByDateDepot(string $DATE_DEPOT) Return CommonCautionRestitution objects filtered by the DATE_DEPOT column
 * @method array findByMotifRejetAcheteur(string $MOTIF_REJET_ACHETEUR) Return CommonCautionRestitution objects filtered by the MOTIF_REJET_ACHETEUR column
 * @method array findByIdAgentAcheteurGenerationMainlevee(int $ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE) Return CommonCautionRestitution objects filtered by the ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE column
 * @method array findByIdAgentAcheteurSignataire(int $ID_AGENT_ACHETEUR_SIGNATAIRE) Return CommonCautionRestitution objects filtered by the ID_AGENT_ACHETEUR_SIGNATAIRE column
 * @method array findByIdAgentAcheteurValidation(int $ID_AGENT_ACHETEUR_VALIDATION) Return CommonCautionRestitution objects filtered by the ID_AGENT_ACHETEUR_VALIDATION column
 * @method array findByIdAgentAcheteurRejet(int $ID_AGENT_ACHETEUR_REJET) Return CommonCautionRestitution objects filtered by the ID_AGENT_ACHETEUR_REJET column
 * @method array findByDateGenerationMainlevee(string $DATE_GENERATION_MAINLEVEE) Return CommonCautionRestitution objects filtered by the DATE_GENERATION_MAINLEVEE column
 * @method array findByDateSignature(string $DATE_SIGNATURE) Return CommonCautionRestitution objects filtered by the DATE_SIGNATURE column
 * @method array findByDateValidationAcheteur(string $DATE_VALIDATION_ACHETEUR) Return CommonCautionRestitution objects filtered by the DATE_VALIDATION_ACHETEUR column
 * @method array findByDateRejetAcheteur(string $DATE_REJET_ACHETEUR) Return CommonCautionRestitution objects filtered by the DATE_REJET_ACHETEUR column
 * @method array findByDatePriseEnChargeBanque(string $DATE_PRISE_EN_CHARGE_BANQUE) Return CommonCautionRestitution objects filtered by the DATE_PRISE_EN_CHARGE_BANQUE column
 * @method array findByDateValidationBanque(string $DATE_VALIDATION_BANQUE) Return CommonCautionRestitution objects filtered by the DATE_VALIDATION_BANQUE column
 * @method array findByDateRejetBanque(string $DATE_REJET_BANQUE) Return CommonCautionRestitution objects filtered by the DATE_REJET_BANQUE column
 * @method array findByIdAgentBanquierPriseEnCharge(int $ID_AGENT_BANQUIER_PRISE_EN_CHARGE) Return CommonCautionRestitution objects filtered by the ID_AGENT_BANQUIER_PRISE_EN_CHARGE column
 * @method array findByIdAgentBanquierValidation(int $ID_AGENT_BANQUIER_VALIDATION) Return CommonCautionRestitution objects filtered by the ID_AGENT_BANQUIER_VALIDATION column
 * @method array findByIdAgentBanquierRejet(int $ID_AGENT_BANQUIER_REJET) Return CommonCautionRestitution objects filtered by the ID_AGENT_BANQUIER_REJET column
 * @method array findByMotifRejetBanquier(string $MOTIF_REJET_BANQUIER) Return CommonCautionRestitution objects filtered by the MOTIF_REJET_BANQUIER column
 * @method array findByIdVille(int $ID_VILLE) Return CommonCautionRestitution objects filtered by the ID_VILLE column
 * @method array findByCodeAgence(string $CODE_AGENCE) Return CommonCautionRestitution objects filtered by the CODE_AGENCE column
 * @method array findByCodeVille(string $CODE_VILLE) Return CommonCautionRestitution objects filtered by the CODE_VILLE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionRestitutionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionRestitutionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionRestitution', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionRestitutionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionRestitutionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionRestitutionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionRestitutionQuery) {
            return $criteria;
        }
        $query = new CommonCautionRestitutionQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonCautionRestitution|CommonCautionRestitution[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionRestitutionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonCautionRestitution A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonCautionRestitution A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_CAUTION_DEMANDE`, `ID_ENTREPRISE`, `ID_INSCRIT`, `RAISON_SOCIALE`, `REF_CONSULTATION`, `ACRONYME_ORG`, `ID_ACHETEUR_SERVICE`, `ID_STATUT`, `TYPE_ANNULATION`, `NUM_COMPTE_VIREMENT`, `ID_BLOB_DEMANDE`, `NOM_DOC_DEMANDE`, `ID_BLOB_MAINLEVEE`, `NOM_DOC_MAINLEVEE`, `DATE_CREA`, `DATE_MODIF`, `DATE_DEPOT`, `MOTIF_REJET_ACHETEUR`, `ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE`, `ID_AGENT_ACHETEUR_SIGNATAIRE`, `ID_AGENT_ACHETEUR_VALIDATION`, `ID_AGENT_ACHETEUR_REJET`, `DATE_GENERATION_MAINLEVEE`, `DATE_SIGNATURE`, `DATE_VALIDATION_ACHETEUR`, `DATE_REJET_ACHETEUR`, `DATE_PRISE_EN_CHARGE_BANQUE`, `DATE_VALIDATION_BANQUE`, `DATE_REJET_BANQUE`, `ID_AGENT_BANQUIER_PRISE_EN_CHARGE`, `ID_AGENT_BANQUIER_VALIDATION`, `ID_AGENT_BANQUIER_REJET`, `MOTIF_REJET_BANQUIER`, `ID_VILLE`, `CODE_AGENCE`, `CODE_VILLE` FROM `caution_restitution` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonCautionRestitution();
            $obj->hydrate($row);
            CommonCautionRestitutionPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonCautionRestitution|CommonCautionRestitution[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonCautionRestitution[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_CAUTION_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCautionDemande(1234); // WHERE ID_CAUTION_DEMANDE = 1234
     * $query->filterByIdCautionDemande(array(12, 34)); // WHERE ID_CAUTION_DEMANDE IN (12, 34)
     * $query->filterByIdCautionDemande(array('min' => 12)); // WHERE ID_CAUTION_DEMANDE >= 12
     * $query->filterByIdCautionDemande(array('max' => 12)); // WHERE ID_CAUTION_DEMANDE <= 12
     * </code>
     *
     * @see       filterByCommonCautionDemande()
     *
     * @param     mixed $idCautionDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdCautionDemande($idCautionDemande = null, $comparison = null)
    {
        if (is_array($idCautionDemande)) {
            $useMinMax = false;
            if (isset($idCautionDemande['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, $idCautionDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCautionDemande['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, $idCautionDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, $idCautionDemande, $comparison);
    }

    /**
     * Filter the query on the ID_ENTREPRISE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE ID_ENTREPRISE = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE ID_ENTREPRISE IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE ID_ENTREPRISE >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE ID_ENTREPRISE <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the ID_INSCRIT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE ID_INSCRIT = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE ID_INSCRIT IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE ID_INSCRIT >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE ID_INSCRIT <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the RAISON_SOCIALE column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSociale('fooValue');   // WHERE RAISON_SOCIALE = 'fooValue'
     * $query->filterByRaisonSociale('%fooValue%'); // WHERE RAISON_SOCIALE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByRaisonSociale($raisonSociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSociale)) {
                $raisonSociale = str_replace('*', '%', $raisonSociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::RAISON_SOCIALE, $raisonSociale, $comparison);
    }

    /**
     * Filter the query on the REF_CONSULTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE REF_CONSULTATION = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE REF_CONSULTATION IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE REF_CONSULTATION >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE REF_CONSULTATION <= 12
     * </code>
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the ACRONYME_ORG column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymeOrg('fooValue');   // WHERE ACRONYME_ORG = 'fooValue'
     * $query->filterByAcronymeOrg('%fooValue%'); // WHERE ACRONYME_ORG LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymeOrg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByAcronymeOrg($acronymeOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymeOrg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymeOrg)) {
                $acronymeOrg = str_replace('*', '%', $acronymeOrg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ACRONYME_ORG, $acronymeOrg, $comparison);
    }

    /**
     * Filter the query on the ID_ACHETEUR_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAcheteurService(1234); // WHERE ID_ACHETEUR_SERVICE = 1234
     * $query->filterByIdAcheteurService(array(12, 34)); // WHERE ID_ACHETEUR_SERVICE IN (12, 34)
     * $query->filterByIdAcheteurService(array('min' => 12)); // WHERE ID_ACHETEUR_SERVICE >= 12
     * $query->filterByIdAcheteurService(array('max' => 12)); // WHERE ID_ACHETEUR_SERVICE <= 12
     * </code>
     *
     * @param     mixed $idAcheteurService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAcheteurService($idAcheteurService = null, $comparison = null)
    {
        if (is_array($idAcheteurService)) {
            $useMinMax = false;
            if (isset($idAcheteurService['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE, $idAcheteurService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAcheteurService['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE, $idAcheteurService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE, $idAcheteurService, $comparison);
    }

    /**
     * Filter the query on the ID_STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatut(1234); // WHERE ID_STATUT = 1234
     * $query->filterByIdStatut(array(12, 34)); // WHERE ID_STATUT IN (12, 34)
     * $query->filterByIdStatut(array('min' => 12)); // WHERE ID_STATUT >= 12
     * $query->filterByIdStatut(array('max' => 12)); // WHERE ID_STATUT <= 12
     * </code>
     *
     * @param     mixed $idStatut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdStatut($idStatut = null, $comparison = null)
    {
        if (is_array($idStatut)) {
            $useMinMax = false;
            if (isset($idStatut['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_STATUT, $idStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatut['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_STATUT, $idStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_STATUT, $idStatut, $comparison);
    }

    /**
     * Filter the query on the TYPE_ANNULATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAnnulation('fooValue');   // WHERE TYPE_ANNULATION = 'fooValue'
     * $query->filterByTypeAnnulation('%fooValue%'); // WHERE TYPE_ANNULATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByTypeAnnulation($typeAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeAnnulation)) {
                $typeAnnulation = str_replace('*', '%', $typeAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::TYPE_ANNULATION, $typeAnnulation, $comparison);
    }

    /**
     * Filter the query on the NUM_COMPTE_VIREMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByNumCompteVirement('fooValue');   // WHERE NUM_COMPTE_VIREMENT = 'fooValue'
     * $query->filterByNumCompteVirement('%fooValue%'); // WHERE NUM_COMPTE_VIREMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numCompteVirement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByNumCompteVirement($numCompteVirement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numCompteVirement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numCompteVirement)) {
                $numCompteVirement = str_replace('*', '%', $numCompteVirement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT, $numCompteVirement, $comparison);
    }

    /**
     * Filter the query on the ID_BLOB_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobDemande(1234); // WHERE ID_BLOB_DEMANDE = 1234
     * $query->filterByIdBlobDemande(array(12, 34)); // WHERE ID_BLOB_DEMANDE IN (12, 34)
     * $query->filterByIdBlobDemande(array('min' => 12)); // WHERE ID_BLOB_DEMANDE >= 12
     * $query->filterByIdBlobDemande(array('max' => 12)); // WHERE ID_BLOB_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idBlobDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdBlobDemande($idBlobDemande = null, $comparison = null)
    {
        if (is_array($idBlobDemande)) {
            $useMinMax = false;
            if (isset($idBlobDemande['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_BLOB_DEMANDE, $idBlobDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobDemande['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_BLOB_DEMANDE, $idBlobDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_BLOB_DEMANDE, $idBlobDemande, $comparison);
    }

    /**
     * Filter the query on the NOM_DOC_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocDemande('fooValue');   // WHERE NOM_DOC_DEMANDE = 'fooValue'
     * $query->filterByNomDocDemande('%fooValue%'); // WHERE NOM_DOC_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByNomDocDemande($nomDocDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocDemande)) {
                $nomDocDemande = str_replace('*', '%', $nomDocDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::NOM_DOC_DEMANDE, $nomDocDemande, $comparison);
    }

    /**
     * Filter the query on the ID_BLOB_MAINLEVEE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobMainlevee(1234); // WHERE ID_BLOB_MAINLEVEE = 1234
     * $query->filterByIdBlobMainlevee(array(12, 34)); // WHERE ID_BLOB_MAINLEVEE IN (12, 34)
     * $query->filterByIdBlobMainlevee(array('min' => 12)); // WHERE ID_BLOB_MAINLEVEE >= 12
     * $query->filterByIdBlobMainlevee(array('max' => 12)); // WHERE ID_BLOB_MAINLEVEE <= 12
     * </code>
     *
     * @param     mixed $idBlobMainlevee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdBlobMainlevee($idBlobMainlevee = null, $comparison = null)
    {
        if (is_array($idBlobMainlevee)) {
            $useMinMax = false;
            if (isset($idBlobMainlevee['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE, $idBlobMainlevee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobMainlevee['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE, $idBlobMainlevee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE, $idBlobMainlevee, $comparison);
    }

    /**
     * Filter the query on the NOM_DOC_MAINLEVEE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocMainlevee('fooValue');   // WHERE NOM_DOC_MAINLEVEE = 'fooValue'
     * $query->filterByNomDocMainlevee('%fooValue%'); // WHERE NOM_DOC_MAINLEVEE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocMainlevee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByNomDocMainlevee($nomDocMainlevee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocMainlevee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocMainlevee)) {
                $nomDocMainlevee = str_replace('*', '%', $nomDocMainlevee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE, $nomDocMainlevee, $comparison);
    }

    /**
     * Filter the query on the DATE_CREA column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE DATE_CREA = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE DATE_CREA = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE DATE_CREA > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIF column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('2011-03-14'); // WHERE DATE_MODIF = '2011-03-14'
     * $query->filterByDateModif('now'); // WHERE DATE_MODIF = '2011-03-14'
     * $query->filterByDateModif(array('max' => 'yesterday')); // WHERE DATE_MODIF > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the DATE_DEPOT column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('2011-03-14'); // WHERE DATE_DEPOT = '2011-03-14'
     * $query->filterByDateDepot('now'); // WHERE DATE_DEPOT = '2011-03-14'
     * $query->filterByDateDepot(array('max' => 'yesterday')); // WHERE DATE_DEPOT > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepot The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (is_array($dateDepot)) {
            $useMinMax = false;
            if (isset($dateDepot['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_DEPOT, $dateDepot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepot['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_DEPOT, $dateDepot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_DEPOT, $dateDepot, $comparison);
    }

    /**
     * Filter the query on the MOTIF_REJET_ACHETEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifRejetAcheteur('fooValue');   // WHERE MOTIF_REJET_ACHETEUR = 'fooValue'
     * $query->filterByMotifRejetAcheteur('%fooValue%'); // WHERE MOTIF_REJET_ACHETEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifRejetAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByMotifRejetAcheteur($motifRejetAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifRejetAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifRejetAcheteur)) {
                $motifRejetAcheteur = str_replace('*', '%', $motifRejetAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR, $motifRejetAcheteur, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentAcheteurGenerationMainlevee(1234); // WHERE ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE = 1234
     * $query->filterByIdAgentAcheteurGenerationMainlevee(array(12, 34)); // WHERE ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE IN (12, 34)
     * $query->filterByIdAgentAcheteurGenerationMainlevee(array('min' => 12)); // WHERE ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE >= 12
     * $query->filterByIdAgentAcheteurGenerationMainlevee(array('max' => 12)); // WHERE ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE <= 12
     * </code>
     *
     * @param     mixed $idAgentAcheteurGenerationMainlevee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAgentAcheteurGenerationMainlevee($idAgentAcheteurGenerationMainlevee = null, $comparison = null)
    {
        if (is_array($idAgentAcheteurGenerationMainlevee)) {
            $useMinMax = false;
            if (isset($idAgentAcheteurGenerationMainlevee['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE, $idAgentAcheteurGenerationMainlevee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentAcheteurGenerationMainlevee['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE, $idAgentAcheteurGenerationMainlevee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE, $idAgentAcheteurGenerationMainlevee, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_ACHETEUR_SIGNATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentAcheteurSignataire(1234); // WHERE ID_AGENT_ACHETEUR_SIGNATAIRE = 1234
     * $query->filterByIdAgentAcheteurSignataire(array(12, 34)); // WHERE ID_AGENT_ACHETEUR_SIGNATAIRE IN (12, 34)
     * $query->filterByIdAgentAcheteurSignataire(array('min' => 12)); // WHERE ID_AGENT_ACHETEUR_SIGNATAIRE >= 12
     * $query->filterByIdAgentAcheteurSignataire(array('max' => 12)); // WHERE ID_AGENT_ACHETEUR_SIGNATAIRE <= 12
     * </code>
     *
     * @param     mixed $idAgentAcheteurSignataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAgentAcheteurSignataire($idAgentAcheteurSignataire = null, $comparison = null)
    {
        if (is_array($idAgentAcheteurSignataire)) {
            $useMinMax = false;
            if (isset($idAgentAcheteurSignataire['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE, $idAgentAcheteurSignataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentAcheteurSignataire['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE, $idAgentAcheteurSignataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE, $idAgentAcheteurSignataire, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_ACHETEUR_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentAcheteurValidation(1234); // WHERE ID_AGENT_ACHETEUR_VALIDATION = 1234
     * $query->filterByIdAgentAcheteurValidation(array(12, 34)); // WHERE ID_AGENT_ACHETEUR_VALIDATION IN (12, 34)
     * $query->filterByIdAgentAcheteurValidation(array('min' => 12)); // WHERE ID_AGENT_ACHETEUR_VALIDATION >= 12
     * $query->filterByIdAgentAcheteurValidation(array('max' => 12)); // WHERE ID_AGENT_ACHETEUR_VALIDATION <= 12
     * </code>
     *
     * @param     mixed $idAgentAcheteurValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAgentAcheteurValidation($idAgentAcheteurValidation = null, $comparison = null)
    {
        if (is_array($idAgentAcheteurValidation)) {
            $useMinMax = false;
            if (isset($idAgentAcheteurValidation['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION, $idAgentAcheteurValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentAcheteurValidation['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION, $idAgentAcheteurValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION, $idAgentAcheteurValidation, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_ACHETEUR_REJET column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentAcheteurRejet(1234); // WHERE ID_AGENT_ACHETEUR_REJET = 1234
     * $query->filterByIdAgentAcheteurRejet(array(12, 34)); // WHERE ID_AGENT_ACHETEUR_REJET IN (12, 34)
     * $query->filterByIdAgentAcheteurRejet(array('min' => 12)); // WHERE ID_AGENT_ACHETEUR_REJET >= 12
     * $query->filterByIdAgentAcheteurRejet(array('max' => 12)); // WHERE ID_AGENT_ACHETEUR_REJET <= 12
     * </code>
     *
     * @param     mixed $idAgentAcheteurRejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAgentAcheteurRejet($idAgentAcheteurRejet = null, $comparison = null)
    {
        if (is_array($idAgentAcheteurRejet)) {
            $useMinMax = false;
            if (isset($idAgentAcheteurRejet['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET, $idAgentAcheteurRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentAcheteurRejet['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET, $idAgentAcheteurRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET, $idAgentAcheteurRejet, $comparison);
    }

    /**
     * Filter the query on the DATE_GENERATION_MAINLEVEE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateGenerationMainlevee('2011-03-14'); // WHERE DATE_GENERATION_MAINLEVEE = '2011-03-14'
     * $query->filterByDateGenerationMainlevee('now'); // WHERE DATE_GENERATION_MAINLEVEE = '2011-03-14'
     * $query->filterByDateGenerationMainlevee(array('max' => 'yesterday')); // WHERE DATE_GENERATION_MAINLEVEE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateGenerationMainlevee The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateGenerationMainlevee($dateGenerationMainlevee = null, $comparison = null)
    {
        if (is_array($dateGenerationMainlevee)) {
            $useMinMax = false;
            if (isset($dateGenerationMainlevee['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE, $dateGenerationMainlevee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateGenerationMainlevee['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE, $dateGenerationMainlevee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE, $dateGenerationMainlevee, $comparison);
    }

    /**
     * Filter the query on the DATE_SIGNATURE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSignature('2011-03-14'); // WHERE DATE_SIGNATURE = '2011-03-14'
     * $query->filterByDateSignature('now'); // WHERE DATE_SIGNATURE = '2011-03-14'
     * $query->filterByDateSignature(array('max' => 'yesterday')); // WHERE DATE_SIGNATURE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateSignature The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateSignature($dateSignature = null, $comparison = null)
    {
        if (is_array($dateSignature)) {
            $useMinMax = false;
            if (isset($dateSignature['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_SIGNATURE, $dateSignature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSignature['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_SIGNATURE, $dateSignature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_SIGNATURE, $dateSignature, $comparison);
    }

    /**
     * Filter the query on the DATE_VALIDATION_ACHETEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationAcheteur('2011-03-14'); // WHERE DATE_VALIDATION_ACHETEUR = '2011-03-14'
     * $query->filterByDateValidationAcheteur('now'); // WHERE DATE_VALIDATION_ACHETEUR = '2011-03-14'
     * $query->filterByDateValidationAcheteur(array('max' => 'yesterday')); // WHERE DATE_VALIDATION_ACHETEUR > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidationAcheteur The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateValidationAcheteur($dateValidationAcheteur = null, $comparison = null)
    {
        if (is_array($dateValidationAcheteur)) {
            $useMinMax = false;
            if (isset($dateValidationAcheteur['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR, $dateValidationAcheteur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidationAcheteur['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR, $dateValidationAcheteur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR, $dateValidationAcheteur, $comparison);
    }

    /**
     * Filter the query on the DATE_REJET_ACHETEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRejetAcheteur('2011-03-14'); // WHERE DATE_REJET_ACHETEUR = '2011-03-14'
     * $query->filterByDateRejetAcheteur('now'); // WHERE DATE_REJET_ACHETEUR = '2011-03-14'
     * $query->filterByDateRejetAcheteur(array('max' => 'yesterday')); // WHERE DATE_REJET_ACHETEUR > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRejetAcheteur The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateRejetAcheteur($dateRejetAcheteur = null, $comparison = null)
    {
        if (is_array($dateRejetAcheteur)) {
            $useMinMax = false;
            if (isset($dateRejetAcheteur['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR, $dateRejetAcheteur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejetAcheteur['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR, $dateRejetAcheteur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR, $dateRejetAcheteur, $comparison);
    }

    /**
     * Filter the query on the DATE_PRISE_EN_CHARGE_BANQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePriseEnChargeBanque('2011-03-14'); // WHERE DATE_PRISE_EN_CHARGE_BANQUE = '2011-03-14'
     * $query->filterByDatePriseEnChargeBanque('now'); // WHERE DATE_PRISE_EN_CHARGE_BANQUE = '2011-03-14'
     * $query->filterByDatePriseEnChargeBanque(array('max' => 'yesterday')); // WHERE DATE_PRISE_EN_CHARGE_BANQUE > '2011-03-13'
     * </code>
     *
     * @param     mixed $datePriseEnChargeBanque The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDatePriseEnChargeBanque($datePriseEnChargeBanque = null, $comparison = null)
    {
        if (is_array($datePriseEnChargeBanque)) {
            $useMinMax = false;
            if (isset($datePriseEnChargeBanque['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE, $datePriseEnChargeBanque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePriseEnChargeBanque['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE, $datePriseEnChargeBanque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE, $datePriseEnChargeBanque, $comparison);
    }

    /**
     * Filter the query on the DATE_VALIDATION_BANQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationBanque('2011-03-14'); // WHERE DATE_VALIDATION_BANQUE = '2011-03-14'
     * $query->filterByDateValidationBanque('now'); // WHERE DATE_VALIDATION_BANQUE = '2011-03-14'
     * $query->filterByDateValidationBanque(array('max' => 'yesterday')); // WHERE DATE_VALIDATION_BANQUE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidationBanque The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateValidationBanque($dateValidationBanque = null, $comparison = null)
    {
        if (is_array($dateValidationBanque)) {
            $useMinMax = false;
            if (isset($dateValidationBanque['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE, $dateValidationBanque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidationBanque['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE, $dateValidationBanque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE, $dateValidationBanque, $comparison);
    }

    /**
     * Filter the query on the DATE_REJET_BANQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRejetBanque('2011-03-14'); // WHERE DATE_REJET_BANQUE = '2011-03-14'
     * $query->filterByDateRejetBanque('now'); // WHERE DATE_REJET_BANQUE = '2011-03-14'
     * $query->filterByDateRejetBanque(array('max' => 'yesterday')); // WHERE DATE_REJET_BANQUE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRejetBanque The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByDateRejetBanque($dateRejetBanque = null, $comparison = null)
    {
        if (is_array($dateRejetBanque)) {
            $useMinMax = false;
            if (isset($dateRejetBanque['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_REJET_BANQUE, $dateRejetBanque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejetBanque['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_REJET_BANQUE, $dateRejetBanque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::DATE_REJET_BANQUE, $dateRejetBanque, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_BANQUIER_PRISE_EN_CHARGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentBanquierPriseEnCharge(1234); // WHERE ID_AGENT_BANQUIER_PRISE_EN_CHARGE = 1234
     * $query->filterByIdAgentBanquierPriseEnCharge(array(12, 34)); // WHERE ID_AGENT_BANQUIER_PRISE_EN_CHARGE IN (12, 34)
     * $query->filterByIdAgentBanquierPriseEnCharge(array('min' => 12)); // WHERE ID_AGENT_BANQUIER_PRISE_EN_CHARGE >= 12
     * $query->filterByIdAgentBanquierPriseEnCharge(array('max' => 12)); // WHERE ID_AGENT_BANQUIER_PRISE_EN_CHARGE <= 12
     * </code>
     *
     * @param     mixed $idAgentBanquierPriseEnCharge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAgentBanquierPriseEnCharge($idAgentBanquierPriseEnCharge = null, $comparison = null)
    {
        if (is_array($idAgentBanquierPriseEnCharge)) {
            $useMinMax = false;
            if (isset($idAgentBanquierPriseEnCharge['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE, $idAgentBanquierPriseEnCharge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentBanquierPriseEnCharge['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE, $idAgentBanquierPriseEnCharge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE, $idAgentBanquierPriseEnCharge, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_BANQUIER_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentBanquierValidation(1234); // WHERE ID_AGENT_BANQUIER_VALIDATION = 1234
     * $query->filterByIdAgentBanquierValidation(array(12, 34)); // WHERE ID_AGENT_BANQUIER_VALIDATION IN (12, 34)
     * $query->filterByIdAgentBanquierValidation(array('min' => 12)); // WHERE ID_AGENT_BANQUIER_VALIDATION >= 12
     * $query->filterByIdAgentBanquierValidation(array('max' => 12)); // WHERE ID_AGENT_BANQUIER_VALIDATION <= 12
     * </code>
     *
     * @param     mixed $idAgentBanquierValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAgentBanquierValidation($idAgentBanquierValidation = null, $comparison = null)
    {
        if (is_array($idAgentBanquierValidation)) {
            $useMinMax = false;
            if (isset($idAgentBanquierValidation['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION, $idAgentBanquierValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentBanquierValidation['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION, $idAgentBanquierValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION, $idAgentBanquierValidation, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_BANQUIER_REJET column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentBanquierRejet(1234); // WHERE ID_AGENT_BANQUIER_REJET = 1234
     * $query->filterByIdAgentBanquierRejet(array(12, 34)); // WHERE ID_AGENT_BANQUIER_REJET IN (12, 34)
     * $query->filterByIdAgentBanquierRejet(array('min' => 12)); // WHERE ID_AGENT_BANQUIER_REJET >= 12
     * $query->filterByIdAgentBanquierRejet(array('max' => 12)); // WHERE ID_AGENT_BANQUIER_REJET <= 12
     * </code>
     *
     * @param     mixed $idAgentBanquierRejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdAgentBanquierRejet($idAgentBanquierRejet = null, $comparison = null)
    {
        if (is_array($idAgentBanquierRejet)) {
            $useMinMax = false;
            if (isset($idAgentBanquierRejet['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET, $idAgentBanquierRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentBanquierRejet['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET, $idAgentBanquierRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET, $idAgentBanquierRejet, $comparison);
    }

    /**
     * Filter the query on the MOTIF_REJET_BANQUIER column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifRejetBanquier('fooValue');   // WHERE MOTIF_REJET_BANQUIER = 'fooValue'
     * $query->filterByMotifRejetBanquier('%fooValue%'); // WHERE MOTIF_REJET_BANQUIER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifRejetBanquier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByMotifRejetBanquier($motifRejetBanquier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifRejetBanquier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifRejetBanquier)) {
                $motifRejetBanquier = str_replace('*', '%', $motifRejetBanquier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER, $motifRejetBanquier, $comparison);
    }

    /**
     * Filter the query on the ID_VILLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVille(1234); // WHERE ID_VILLE = 1234
     * $query->filterByIdVille(array(12, 34)); // WHERE ID_VILLE IN (12, 34)
     * $query->filterByIdVille(array('min' => 12)); // WHERE ID_VILLE >= 12
     * $query->filterByIdVille(array('max' => 12)); // WHERE ID_VILLE <= 12
     * </code>
     *
     * @param     mixed $idVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByIdVille($idVille = null, $comparison = null)
    {
        if (is_array($idVille)) {
            $useMinMax = false;
            if (isset($idVille['min'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_VILLE, $idVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVille['max'])) {
                $this->addUsingAlias(CommonCautionRestitutionPeer::ID_VILLE, $idVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::ID_VILLE, $idVille, $comparison);
    }

    /**
     * Filter the query on the CODE_AGENCE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeAgence('fooValue');   // WHERE CODE_AGENCE = 'fooValue'
     * $query->filterByCodeAgence('%fooValue%'); // WHERE CODE_AGENCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeAgence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByCodeAgence($codeAgence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeAgence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeAgence)) {
                $codeAgence = str_replace('*', '%', $codeAgence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::CODE_AGENCE, $codeAgence, $comparison);
    }

    /**
     * Filter the query on the CODE_VILLE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeVille('fooValue');   // WHERE CODE_VILLE = 'fooValue'
     * $query->filterByCodeVille('%fooValue%'); // WHERE CODE_VILLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function filterByCodeVille($codeVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeVille)) {
                $codeVille = str_replace('*', '%', $codeVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionRestitutionPeer::CODE_VILLE, $codeVille, $comparison);
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionRestitutionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemande($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, $commonCautionDemande->getId(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, $commonCautionDemande->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonCautionDemande() only accepts arguments of type CommonCautionDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionDemande relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function joinCommonCautionDemande($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionDemande');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionDemande');
        }

        return $this;
    }

    /**
     * Use the CommonCautionDemande relation CommonCautionDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionDemandeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCautionDemande($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionDemande', 'CommonCautionDemandeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionRestitution $commonCautionRestitution Object to remove from the list of results
     *
     * @return CommonCautionRestitutionQuery The current query, for fluid interface
     */
    public function prune($commonCautionRestitution = null)
    {
        if ($commonCautionRestitution) {
            $this->addUsingAlias(CommonCautionRestitutionPeer::ID, $commonCautionRestitution->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
