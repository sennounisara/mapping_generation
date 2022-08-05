<?php


/**
 * Base class that represents a query for the 'gestion_adresses' table.
 *
 * 
 *
 * @method CommonGestionAdressesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonGestionAdressesQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonGestionAdressesQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonGestionAdressesQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonGestionAdressesQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonGestionAdressesQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffres($order = Criteria::ASC) Order by the adresse_depot_offres column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiers($order = Criteria::ASC) Order by the adresse_retrais_dossiers column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlis($order = Criteria::ASC) Order by the lieu_ouverture_plis column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresFr($order = Criteria::ASC) Order by the adresse_depot_offres_fr column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersFr($order = Criteria::ASC) Order by the adresse_retrais_dossiers_fr column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisFr($order = Criteria::ASC) Order by the lieu_ouverture_plis_fr column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresAr($order = Criteria::ASC) Order by the adresse_depot_offres_ar column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersAr($order = Criteria::ASC) Order by the adresse_retrais_dossiers_ar column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisAr($order = Criteria::ASC) Order by the lieu_ouverture_plis_ar column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresEn($order = Criteria::ASC) Order by the adresse_depot_offres_en column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresEs($order = Criteria::ASC) Order by the adresse_depot_offres_es column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresSu($order = Criteria::ASC) Order by the adresse_depot_offres_su column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresDu($order = Criteria::ASC) Order by the adresse_depot_offres_du column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresCz($order = Criteria::ASC) Order by the adresse_depot_offres_cz column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersEn($order = Criteria::ASC) Order by the adresse_retrais_dossiers_en column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersEs($order = Criteria::ASC) Order by the adresse_retrais_dossiers_es column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersSu($order = Criteria::ASC) Order by the adresse_retrais_dossiers_su column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersDu($order = Criteria::ASC) Order by the adresse_retrais_dossiers_du column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersCz($order = Criteria::ASC) Order by the adresse_retrais_dossiers_cz column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisEn($order = Criteria::ASC) Order by the lieu_ouverture_plis_en column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisEs($order = Criteria::ASC) Order by the lieu_ouverture_plis_es column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisSu($order = Criteria::ASC) Order by the lieu_ouverture_plis_su column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisDu($order = Criteria::ASC) Order by the lieu_ouverture_plis_du column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisCz($order = Criteria::ASC) Order by the lieu_ouverture_plis_cz column
 * @method CommonGestionAdressesQuery orderByAdresseDepotOffresIt($order = Criteria::ASC) Order by the adresse_depot_offres_it column
 * @method CommonGestionAdressesQuery orderByAdresseRetraisDossiersIt($order = Criteria::ASC) Order by the adresse_retrais_dossiers_it column
 * @method CommonGestionAdressesQuery orderByLieuOuverturePlisIt($order = Criteria::ASC) Order by the lieu_ouverture_plis_it column
 *
 * @method CommonGestionAdressesQuery groupById() Group by the id column
 * @method CommonGestionAdressesQuery groupByOrganisme() Group by the organisme column
 * @method CommonGestionAdressesQuery groupByIdService() Group by the id_service column
 * @method CommonGestionAdressesQuery groupByIdAgent() Group by the id_agent column
 * @method CommonGestionAdressesQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonGestionAdressesQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffres() Group by the adresse_depot_offres column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiers() Group by the adresse_retrais_dossiers column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlis() Group by the lieu_ouverture_plis column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresFr() Group by the adresse_depot_offres_fr column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersFr() Group by the adresse_retrais_dossiers_fr column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisFr() Group by the lieu_ouverture_plis_fr column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresAr() Group by the adresse_depot_offres_ar column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersAr() Group by the adresse_retrais_dossiers_ar column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisAr() Group by the lieu_ouverture_plis_ar column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresEn() Group by the adresse_depot_offres_en column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresEs() Group by the adresse_depot_offres_es column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresSu() Group by the adresse_depot_offres_su column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresDu() Group by the adresse_depot_offres_du column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresCz() Group by the adresse_depot_offres_cz column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersEn() Group by the adresse_retrais_dossiers_en column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersEs() Group by the adresse_retrais_dossiers_es column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersSu() Group by the adresse_retrais_dossiers_su column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersDu() Group by the adresse_retrais_dossiers_du column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersCz() Group by the adresse_retrais_dossiers_cz column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisEn() Group by the lieu_ouverture_plis_en column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisEs() Group by the lieu_ouverture_plis_es column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisSu() Group by the lieu_ouverture_plis_su column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisDu() Group by the lieu_ouverture_plis_du column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisCz() Group by the lieu_ouverture_plis_cz column
 * @method CommonGestionAdressesQuery groupByAdresseDepotOffresIt() Group by the adresse_depot_offres_it column
 * @method CommonGestionAdressesQuery groupByAdresseRetraisDossiersIt() Group by the adresse_retrais_dossiers_it column
 * @method CommonGestionAdressesQuery groupByLieuOuverturePlisIt() Group by the lieu_ouverture_plis_it column
 *
 * @method CommonGestionAdressesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonGestionAdressesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonGestionAdressesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonGestionAdresses findOne(PropelPDO $con = null) Return the first CommonGestionAdresses matching the query
 * @method CommonGestionAdresses findOneOrCreate(PropelPDO $con = null) Return the first CommonGestionAdresses matching the query, or a new CommonGestionAdresses object populated from the query conditions when no match is found
 *
 * @method CommonGestionAdresses findOneById(int $id) Return the first CommonGestionAdresses filtered by the id column
 * @method CommonGestionAdresses findOneByOrganisme(string $organisme) Return the first CommonGestionAdresses filtered by the organisme column
 * @method CommonGestionAdresses findOneByIdService(int $id_service) Return the first CommonGestionAdresses filtered by the id_service column
 * @method CommonGestionAdresses findOneByIdAgent(int $id_agent) Return the first CommonGestionAdresses filtered by the id_agent column
 * @method CommonGestionAdresses findOneByNomAgent(string $nom_agent) Return the first CommonGestionAdresses filtered by the nom_agent column
 * @method CommonGestionAdresses findOneByPrenomAgent(string $prenom_agent) Return the first CommonGestionAdresses filtered by the prenom_agent column
 * @method CommonGestionAdresses findOneByAdresseDepotOffres(string $adresse_depot_offres) Return the first CommonGestionAdresses filtered by the adresse_depot_offres column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers column
 * @method CommonGestionAdresses findOneByLieuOuverturePlis(string $lieu_ouverture_plis) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresFr(string $adresse_depot_offres_fr) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_fr column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersFr(string $adresse_retrais_dossiers_fr) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_fr column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisFr(string $lieu_ouverture_plis_fr) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_fr column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresAr(string $adresse_depot_offres_ar) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_ar column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersAr(string $adresse_retrais_dossiers_ar) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_ar column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisAr(string $lieu_ouverture_plis_ar) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_ar column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresEn(string $adresse_depot_offres_en) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_en column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresEs(string $adresse_depot_offres_es) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_es column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresSu(string $adresse_depot_offres_su) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_su column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresDu(string $adresse_depot_offres_du) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_du column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresCz(string $adresse_depot_offres_cz) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_cz column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersEn(string $adresse_retrais_dossiers_en) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_en column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersEs(string $adresse_retrais_dossiers_es) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_es column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersSu(string $adresse_retrais_dossiers_su) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_su column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersDu(string $adresse_retrais_dossiers_du) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_du column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersCz(string $adresse_retrais_dossiers_cz) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_cz column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisEn(string $lieu_ouverture_plis_en) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_en column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisEs(string $lieu_ouverture_plis_es) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_es column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisSu(string $lieu_ouverture_plis_su) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_su column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisDu(string $lieu_ouverture_plis_du) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_du column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisCz(string $lieu_ouverture_plis_cz) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_cz column
 * @method CommonGestionAdresses findOneByAdresseDepotOffresIt(string $adresse_depot_offres_it) Return the first CommonGestionAdresses filtered by the adresse_depot_offres_it column
 * @method CommonGestionAdresses findOneByAdresseRetraisDossiersIt(string $adresse_retrais_dossiers_it) Return the first CommonGestionAdresses filtered by the adresse_retrais_dossiers_it column
 * @method CommonGestionAdresses findOneByLieuOuverturePlisIt(string $lieu_ouverture_plis_it) Return the first CommonGestionAdresses filtered by the lieu_ouverture_plis_it column
 *
 * @method array findById(int $id) Return CommonGestionAdresses objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonGestionAdresses objects filtered by the organisme column
 * @method array findByIdService(int $id_service) Return CommonGestionAdresses objects filtered by the id_service column
 * @method array findByIdAgent(int $id_agent) Return CommonGestionAdresses objects filtered by the id_agent column
 * @method array findByNomAgent(string $nom_agent) Return CommonGestionAdresses objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonGestionAdresses objects filtered by the prenom_agent column
 * @method array findByAdresseDepotOffres(string $adresse_depot_offres) Return CommonGestionAdresses objects filtered by the adresse_depot_offres column
 * @method array findByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers column
 * @method array findByLieuOuverturePlis(string $lieu_ouverture_plis) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis column
 * @method array findByAdresseDepotOffresFr(string $adresse_depot_offres_fr) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_fr column
 * @method array findByAdresseRetraisDossiersFr(string $adresse_retrais_dossiers_fr) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_fr column
 * @method array findByLieuOuverturePlisFr(string $lieu_ouverture_plis_fr) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_fr column
 * @method array findByAdresseDepotOffresAr(string $adresse_depot_offres_ar) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_ar column
 * @method array findByAdresseRetraisDossiersAr(string $adresse_retrais_dossiers_ar) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_ar column
 * @method array findByLieuOuverturePlisAr(string $lieu_ouverture_plis_ar) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_ar column
 * @method array findByAdresseDepotOffresEn(string $adresse_depot_offres_en) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_en column
 * @method array findByAdresseDepotOffresEs(string $adresse_depot_offres_es) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_es column
 * @method array findByAdresseDepotOffresSu(string $adresse_depot_offres_su) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_su column
 * @method array findByAdresseDepotOffresDu(string $adresse_depot_offres_du) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_du column
 * @method array findByAdresseDepotOffresCz(string $adresse_depot_offres_cz) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_cz column
 * @method array findByAdresseRetraisDossiersEn(string $adresse_retrais_dossiers_en) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_en column
 * @method array findByAdresseRetraisDossiersEs(string $adresse_retrais_dossiers_es) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_es column
 * @method array findByAdresseRetraisDossiersSu(string $adresse_retrais_dossiers_su) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_su column
 * @method array findByAdresseRetraisDossiersDu(string $adresse_retrais_dossiers_du) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_du column
 * @method array findByAdresseRetraisDossiersCz(string $adresse_retrais_dossiers_cz) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_cz column
 * @method array findByLieuOuverturePlisEn(string $lieu_ouverture_plis_en) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_en column
 * @method array findByLieuOuverturePlisEs(string $lieu_ouverture_plis_es) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_es column
 * @method array findByLieuOuverturePlisSu(string $lieu_ouverture_plis_su) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_su column
 * @method array findByLieuOuverturePlisDu(string $lieu_ouverture_plis_du) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_du column
 * @method array findByLieuOuverturePlisCz(string $lieu_ouverture_plis_cz) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_cz column
 * @method array findByAdresseDepotOffresIt(string $adresse_depot_offres_it) Return CommonGestionAdresses objects filtered by the adresse_depot_offres_it column
 * @method array findByAdresseRetraisDossiersIt(string $adresse_retrais_dossiers_it) Return CommonGestionAdresses objects filtered by the adresse_retrais_dossiers_it column
 * @method array findByLieuOuverturePlisIt(string $lieu_ouverture_plis_it) Return CommonGestionAdresses objects filtered by the lieu_ouverture_plis_it column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGestionAdressesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonGestionAdressesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonGestionAdresses', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonGestionAdressesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonGestionAdressesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonGestionAdressesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonGestionAdressesQuery) {
            return $criteria;
        }
        $query = new CommonGestionAdressesQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonGestionAdresses|CommonGestionAdresses[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonGestionAdressesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonGestionAdresses A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_service`, `id_agent`, `nom_agent`, `prenom_agent`, `adresse_depot_offres`, `adresse_retrais_dossiers`, `lieu_ouverture_plis`, `adresse_depot_offres_fr`, `adresse_retrais_dossiers_fr`, `lieu_ouverture_plis_fr`, `adresse_depot_offres_ar`, `adresse_retrais_dossiers_ar`, `lieu_ouverture_plis_ar`, `adresse_depot_offres_en`, `adresse_depot_offres_es`, `adresse_depot_offres_su`, `adresse_depot_offres_du`, `adresse_depot_offres_cz`, `adresse_retrais_dossiers_en`, `adresse_retrais_dossiers_es`, `adresse_retrais_dossiers_su`, `adresse_retrais_dossiers_du`, `adresse_retrais_dossiers_cz`, `lieu_ouverture_plis_en`, `lieu_ouverture_plis_es`, `lieu_ouverture_plis_su`, `lieu_ouverture_plis_du`, `lieu_ouverture_plis_cz`, `adresse_depot_offres_it`, `adresse_retrais_dossiers_it`, `lieu_ouverture_plis_it` FROM `gestion_adresses` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonGestionAdresses();
            $obj->hydrate($row);
            CommonGestionAdressesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonGestionAdresses|CommonGestionAdresses[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonGestionAdresses[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonGestionAdressesPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonGestionAdressesPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonGestionAdressesPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonGestionAdressesPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonGestionAdressesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonGestionAdressesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonGestionAdressesPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonGestionAdressesPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonGestionAdressesPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonGestionAdressesPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffres('fooValue');   // WHERE adresse_depot_offres = 'fooValue'
     * $query->filterByAdresseDepotOffres('%fooValue%'); // WHERE adresse_depot_offres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffres($adresseDepotOffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffres)) {
                $adresseDepotOffres = str_replace('*', '%', $adresseDepotOffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES, $adresseDepotOffres, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiers('fooValue');   // WHERE adresse_retrais_dossiers = 'fooValue'
     * $query->filterByAdresseRetraisDossiers('%fooValue%'); // WHERE adresse_retrais_dossiers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiers($adresseRetraisDossiers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiers)) {
                $adresseRetraisDossiers = str_replace('*', '%', $adresseRetraisDossiers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS, $adresseRetraisDossiers, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlis('fooValue');   // WHERE lieu_ouverture_plis = 'fooValue'
     * $query->filterByLieuOuverturePlis('%fooValue%'); // WHERE lieu_ouverture_plis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlis($lieuOuverturePlis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlis)) {
                $lieuOuverturePlis = str_replace('*', '%', $lieuOuverturePlis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS, $lieuOuverturePlis, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresFr('fooValue');   // WHERE adresse_depot_offres_fr = 'fooValue'
     * $query->filterByAdresseDepotOffresFr('%fooValue%'); // WHERE adresse_depot_offres_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresFr($adresseDepotOffresFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresFr)) {
                $adresseDepotOffresFr = str_replace('*', '%', $adresseDepotOffresFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR, $adresseDepotOffresFr, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersFr('fooValue');   // WHERE adresse_retrais_dossiers_fr = 'fooValue'
     * $query->filterByAdresseRetraisDossiersFr('%fooValue%'); // WHERE adresse_retrais_dossiers_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersFr($adresseRetraisDossiersFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersFr)) {
                $adresseRetraisDossiersFr = str_replace('*', '%', $adresseRetraisDossiersFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR, $adresseRetraisDossiersFr, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisFr('fooValue');   // WHERE lieu_ouverture_plis_fr = 'fooValue'
     * $query->filterByLieuOuverturePlisFr('%fooValue%'); // WHERE lieu_ouverture_plis_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisFr($lieuOuverturePlisFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisFr)) {
                $lieuOuverturePlisFr = str_replace('*', '%', $lieuOuverturePlisFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR, $lieuOuverturePlisFr, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresAr('fooValue');   // WHERE adresse_depot_offres_ar = 'fooValue'
     * $query->filterByAdresseDepotOffresAr('%fooValue%'); // WHERE adresse_depot_offres_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresAr($adresseDepotOffresAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresAr)) {
                $adresseDepotOffresAr = str_replace('*', '%', $adresseDepotOffresAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR, $adresseDepotOffresAr, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersAr('fooValue');   // WHERE adresse_retrais_dossiers_ar = 'fooValue'
     * $query->filterByAdresseRetraisDossiersAr('%fooValue%'); // WHERE adresse_retrais_dossiers_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersAr($adresseRetraisDossiersAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersAr)) {
                $adresseRetraisDossiersAr = str_replace('*', '%', $adresseRetraisDossiersAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR, $adresseRetraisDossiersAr, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisAr('fooValue');   // WHERE lieu_ouverture_plis_ar = 'fooValue'
     * $query->filterByLieuOuverturePlisAr('%fooValue%'); // WHERE lieu_ouverture_plis_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisAr($lieuOuverturePlisAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisAr)) {
                $lieuOuverturePlisAr = str_replace('*', '%', $lieuOuverturePlisAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR, $lieuOuverturePlisAr, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresEn('fooValue');   // WHERE adresse_depot_offres_en = 'fooValue'
     * $query->filterByAdresseDepotOffresEn('%fooValue%'); // WHERE adresse_depot_offres_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresEn($adresseDepotOffresEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresEn)) {
                $adresseDepotOffresEn = str_replace('*', '%', $adresseDepotOffresEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN, $adresseDepotOffresEn, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresEs('fooValue');   // WHERE adresse_depot_offres_es = 'fooValue'
     * $query->filterByAdresseDepotOffresEs('%fooValue%'); // WHERE adresse_depot_offres_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresEs($adresseDepotOffresEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresEs)) {
                $adresseDepotOffresEs = str_replace('*', '%', $adresseDepotOffresEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES, $adresseDepotOffresEs, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresSu('fooValue');   // WHERE adresse_depot_offres_su = 'fooValue'
     * $query->filterByAdresseDepotOffresSu('%fooValue%'); // WHERE adresse_depot_offres_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresSu($adresseDepotOffresSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresSu)) {
                $adresseDepotOffresSu = str_replace('*', '%', $adresseDepotOffresSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU, $adresseDepotOffresSu, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresDu('fooValue');   // WHERE adresse_depot_offres_du = 'fooValue'
     * $query->filterByAdresseDepotOffresDu('%fooValue%'); // WHERE adresse_depot_offres_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresDu($adresseDepotOffresDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresDu)) {
                $adresseDepotOffresDu = str_replace('*', '%', $adresseDepotOffresDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU, $adresseDepotOffresDu, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresCz('fooValue');   // WHERE adresse_depot_offres_cz = 'fooValue'
     * $query->filterByAdresseDepotOffresCz('%fooValue%'); // WHERE adresse_depot_offres_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresCz($adresseDepotOffresCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresCz)) {
                $adresseDepotOffresCz = str_replace('*', '%', $adresseDepotOffresCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ, $adresseDepotOffresCz, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersEn('fooValue');   // WHERE adresse_retrais_dossiers_en = 'fooValue'
     * $query->filterByAdresseRetraisDossiersEn('%fooValue%'); // WHERE adresse_retrais_dossiers_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersEn($adresseRetraisDossiersEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersEn)) {
                $adresseRetraisDossiersEn = str_replace('*', '%', $adresseRetraisDossiersEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN, $adresseRetraisDossiersEn, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersEs('fooValue');   // WHERE adresse_retrais_dossiers_es = 'fooValue'
     * $query->filterByAdresseRetraisDossiersEs('%fooValue%'); // WHERE adresse_retrais_dossiers_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersEs($adresseRetraisDossiersEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersEs)) {
                $adresseRetraisDossiersEs = str_replace('*', '%', $adresseRetraisDossiersEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES, $adresseRetraisDossiersEs, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersSu('fooValue');   // WHERE adresse_retrais_dossiers_su = 'fooValue'
     * $query->filterByAdresseRetraisDossiersSu('%fooValue%'); // WHERE adresse_retrais_dossiers_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersSu($adresseRetraisDossiersSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersSu)) {
                $adresseRetraisDossiersSu = str_replace('*', '%', $adresseRetraisDossiersSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU, $adresseRetraisDossiersSu, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersDu('fooValue');   // WHERE adresse_retrais_dossiers_du = 'fooValue'
     * $query->filterByAdresseRetraisDossiersDu('%fooValue%'); // WHERE adresse_retrais_dossiers_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersDu($adresseRetraisDossiersDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersDu)) {
                $adresseRetraisDossiersDu = str_replace('*', '%', $adresseRetraisDossiersDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU, $adresseRetraisDossiersDu, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersCz('fooValue');   // WHERE adresse_retrais_dossiers_cz = 'fooValue'
     * $query->filterByAdresseRetraisDossiersCz('%fooValue%'); // WHERE adresse_retrais_dossiers_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersCz($adresseRetraisDossiersCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersCz)) {
                $adresseRetraisDossiersCz = str_replace('*', '%', $adresseRetraisDossiersCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ, $adresseRetraisDossiersCz, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisEn('fooValue');   // WHERE lieu_ouverture_plis_en = 'fooValue'
     * $query->filterByLieuOuverturePlisEn('%fooValue%'); // WHERE lieu_ouverture_plis_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisEn($lieuOuverturePlisEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisEn)) {
                $lieuOuverturePlisEn = str_replace('*', '%', $lieuOuverturePlisEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN, $lieuOuverturePlisEn, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisEs('fooValue');   // WHERE lieu_ouverture_plis_es = 'fooValue'
     * $query->filterByLieuOuverturePlisEs('%fooValue%'); // WHERE lieu_ouverture_plis_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisEs($lieuOuverturePlisEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisEs)) {
                $lieuOuverturePlisEs = str_replace('*', '%', $lieuOuverturePlisEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES, $lieuOuverturePlisEs, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisSu('fooValue');   // WHERE lieu_ouverture_plis_su = 'fooValue'
     * $query->filterByLieuOuverturePlisSu('%fooValue%'); // WHERE lieu_ouverture_plis_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisSu($lieuOuverturePlisSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisSu)) {
                $lieuOuverturePlisSu = str_replace('*', '%', $lieuOuverturePlisSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU, $lieuOuverturePlisSu, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisDu('fooValue');   // WHERE lieu_ouverture_plis_du = 'fooValue'
     * $query->filterByLieuOuverturePlisDu('%fooValue%'); // WHERE lieu_ouverture_plis_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisDu($lieuOuverturePlisDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisDu)) {
                $lieuOuverturePlisDu = str_replace('*', '%', $lieuOuverturePlisDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU, $lieuOuverturePlisDu, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisCz('fooValue');   // WHERE lieu_ouverture_plis_cz = 'fooValue'
     * $query->filterByLieuOuverturePlisCz('%fooValue%'); // WHERE lieu_ouverture_plis_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisCz($lieuOuverturePlisCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisCz)) {
                $lieuOuverturePlisCz = str_replace('*', '%', $lieuOuverturePlisCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ, $lieuOuverturePlisCz, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresIt('fooValue');   // WHERE adresse_depot_offres_it = 'fooValue'
     * $query->filterByAdresseDepotOffresIt('%fooValue%'); // WHERE adresse_depot_offres_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresIt($adresseDepotOffresIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresIt)) {
                $adresseDepotOffresIt = str_replace('*', '%', $adresseDepotOffresIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT, $adresseDepotOffresIt, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersIt('fooValue');   // WHERE adresse_retrais_dossiers_it = 'fooValue'
     * $query->filterByAdresseRetraisDossiersIt('%fooValue%'); // WHERE adresse_retrais_dossiers_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersIt($adresseRetraisDossiersIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersIt)) {
                $adresseRetraisDossiersIt = str_replace('*', '%', $adresseRetraisDossiersIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT, $adresseRetraisDossiersIt, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisIt('fooValue');   // WHERE lieu_ouverture_plis_it = 'fooValue'
     * $query->filterByLieuOuverturePlisIt('%fooValue%'); // WHERE lieu_ouverture_plis_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisIt($lieuOuverturePlisIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisIt)) {
                $lieuOuverturePlisIt = str_replace('*', '%', $lieuOuverturePlisIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT, $lieuOuverturePlisIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonGestionAdresses $commonGestionAdresses Object to remove from the list of results
     *
     * @return CommonGestionAdressesQuery The current query, for fluid interface
     */
    public function prune($commonGestionAdresses = null)
    {
        if ($commonGestionAdresses) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonGestionAdressesPeer::ID), $commonGestionAdresses->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonGestionAdressesPeer::ORGANISME), $commonGestionAdresses->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
