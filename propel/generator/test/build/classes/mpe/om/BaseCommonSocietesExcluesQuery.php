<?php


/**
 * Base class that represents a query for the 'Societes_Exclues' table.
 *
 * 
 *
 * @method CommonSocietesExcluesQuery orderByIdSocietesExclues($order = Criteria::ASC) Order by the id_societes_exclues column
 * @method CommonSocietesExcluesQuery orderByOrganismeAcronyme($order = Criteria::ASC) Order by the organisme_acronyme column
 * @method CommonSocietesExcluesQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonSocietesExcluesQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonSocietesExcluesQuery orderByNomDocument($order = Criteria::ASC) Order by the nom_document column
 * @method CommonSocietesExcluesQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonSocietesExcluesQuery orderByTailleDocument($order = Criteria::ASC) Order by the taille_document column
 * @method CommonSocietesExcluesQuery orderByIdentifiantEntreprise($order = Criteria::ASC) Order by the identifiant_entreprise column
 * @method CommonSocietesExcluesQuery orderByRaisonSociale($order = Criteria::ASC) Order by the raison_sociale column
 * @method CommonSocietesExcluesQuery orderByMotif($order = Criteria::ASC) Order by the motif column
 * @method CommonSocietesExcluesQuery orderByRaisonSocialeFr($order = Criteria::ASC) Order by the raison_sociale_fr column
 * @method CommonSocietesExcluesQuery orderByMotifFr($order = Criteria::ASC) Order by the motif_fr column
 * @method CommonSocietesExcluesQuery orderByRaisonSocialeAr($order = Criteria::ASC) Order by the raison_sociale_ar column
 * @method CommonSocietesExcluesQuery orderByMotifAr($order = Criteria::ASC) Order by the motif_ar column
 * @method CommonSocietesExcluesQuery orderByTypeExclusion($order = Criteria::ASC) Order by the type_exclusion column
 * @method CommonSocietesExcluesQuery orderByDateDebutExclusion($order = Criteria::ASC) Order by the date_debut_exclusion column
 * @method CommonSocietesExcluesQuery orderByDateFinExclusion($order = Criteria::ASC) Order by the date_fin_exclusion column
 * @method CommonSocietesExcluesQuery orderByTypePortee($order = Criteria::ASC) Order by the type_portee column
 * @method CommonSocietesExcluesQuery orderByRaisonSocialeIt($order = Criteria::ASC) Order by the raison_sociale_it column
 * @method CommonSocietesExcluesQuery orderByMotifIt($order = Criteria::ASC) Order by the motif_it column
 *
 * @method CommonSocietesExcluesQuery groupByIdSocietesExclues() Group by the id_societes_exclues column
 * @method CommonSocietesExcluesQuery groupByOrganismeAcronyme() Group by the organisme_acronyme column
 * @method CommonSocietesExcluesQuery groupByIdService() Group by the id_service column
 * @method CommonSocietesExcluesQuery groupByIdAgent() Group by the id_agent column
 * @method CommonSocietesExcluesQuery groupByNomDocument() Group by the nom_document column
 * @method CommonSocietesExcluesQuery groupByIdBlob() Group by the id_blob column
 * @method CommonSocietesExcluesQuery groupByTailleDocument() Group by the taille_document column
 * @method CommonSocietesExcluesQuery groupByIdentifiantEntreprise() Group by the identifiant_entreprise column
 * @method CommonSocietesExcluesQuery groupByRaisonSociale() Group by the raison_sociale column
 * @method CommonSocietesExcluesQuery groupByMotif() Group by the motif column
 * @method CommonSocietesExcluesQuery groupByRaisonSocialeFr() Group by the raison_sociale_fr column
 * @method CommonSocietesExcluesQuery groupByMotifFr() Group by the motif_fr column
 * @method CommonSocietesExcluesQuery groupByRaisonSocialeAr() Group by the raison_sociale_ar column
 * @method CommonSocietesExcluesQuery groupByMotifAr() Group by the motif_ar column
 * @method CommonSocietesExcluesQuery groupByTypeExclusion() Group by the type_exclusion column
 * @method CommonSocietesExcluesQuery groupByDateDebutExclusion() Group by the date_debut_exclusion column
 * @method CommonSocietesExcluesQuery groupByDateFinExclusion() Group by the date_fin_exclusion column
 * @method CommonSocietesExcluesQuery groupByTypePortee() Group by the type_portee column
 * @method CommonSocietesExcluesQuery groupByRaisonSocialeIt() Group by the raison_sociale_it column
 * @method CommonSocietesExcluesQuery groupByMotifIt() Group by the motif_it column
 *
 * @method CommonSocietesExcluesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSocietesExcluesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSocietesExcluesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSocietesExclues findOne(PropelPDO $con = null) Return the first CommonSocietesExclues matching the query
 * @method CommonSocietesExclues findOneOrCreate(PropelPDO $con = null) Return the first CommonSocietesExclues matching the query, or a new CommonSocietesExclues object populated from the query conditions when no match is found
 *
 * @method CommonSocietesExclues findOneByOrganismeAcronyme(string $organisme_acronyme) Return the first CommonSocietesExclues filtered by the organisme_acronyme column
 * @method CommonSocietesExclues findOneByIdService(int $id_service) Return the first CommonSocietesExclues filtered by the id_service column
 * @method CommonSocietesExclues findOneByIdAgent(int $id_agent) Return the first CommonSocietesExclues filtered by the id_agent column
 * @method CommonSocietesExclues findOneByNomDocument(string $nom_document) Return the first CommonSocietesExclues filtered by the nom_document column
 * @method CommonSocietesExclues findOneByIdBlob(int $id_blob) Return the first CommonSocietesExclues filtered by the id_blob column
 * @method CommonSocietesExclues findOneByTailleDocument(string $taille_document) Return the first CommonSocietesExclues filtered by the taille_document column
 * @method CommonSocietesExclues findOneByIdentifiantEntreprise(string $identifiant_entreprise) Return the first CommonSocietesExclues filtered by the identifiant_entreprise column
 * @method CommonSocietesExclues findOneByRaisonSociale(string $raison_sociale) Return the first CommonSocietesExclues filtered by the raison_sociale column
 * @method CommonSocietesExclues findOneByMotif(string $motif) Return the first CommonSocietesExclues filtered by the motif column
 * @method CommonSocietesExclues findOneByRaisonSocialeFr(string $raison_sociale_fr) Return the first CommonSocietesExclues filtered by the raison_sociale_fr column
 * @method CommonSocietesExclues findOneByMotifFr(string $motif_fr) Return the first CommonSocietesExclues filtered by the motif_fr column
 * @method CommonSocietesExclues findOneByRaisonSocialeAr(string $raison_sociale_ar) Return the first CommonSocietesExclues filtered by the raison_sociale_ar column
 * @method CommonSocietesExclues findOneByMotifAr(string $motif_ar) Return the first CommonSocietesExclues filtered by the motif_ar column
 * @method CommonSocietesExclues findOneByTypeExclusion(string $type_exclusion) Return the first CommonSocietesExclues filtered by the type_exclusion column
 * @method CommonSocietesExclues findOneByDateDebutExclusion(string $date_debut_exclusion) Return the first CommonSocietesExclues filtered by the date_debut_exclusion column
 * @method CommonSocietesExclues findOneByDateFinExclusion(string $date_fin_exclusion) Return the first CommonSocietesExclues filtered by the date_fin_exclusion column
 * @method CommonSocietesExclues findOneByTypePortee(string $type_portee) Return the first CommonSocietesExclues filtered by the type_portee column
 * @method CommonSocietesExclues findOneByRaisonSocialeIt(string $raison_sociale_it) Return the first CommonSocietesExclues filtered by the raison_sociale_it column
 * @method CommonSocietesExclues findOneByMotifIt(string $motif_it) Return the first CommonSocietesExclues filtered by the motif_it column
 *
 * @method array findByIdSocietesExclues(int $id_societes_exclues) Return CommonSocietesExclues objects filtered by the id_societes_exclues column
 * @method array findByOrganismeAcronyme(string $organisme_acronyme) Return CommonSocietesExclues objects filtered by the organisme_acronyme column
 * @method array findByIdService(int $id_service) Return CommonSocietesExclues objects filtered by the id_service column
 * @method array findByIdAgent(int $id_agent) Return CommonSocietesExclues objects filtered by the id_agent column
 * @method array findByNomDocument(string $nom_document) Return CommonSocietesExclues objects filtered by the nom_document column
 * @method array findByIdBlob(int $id_blob) Return CommonSocietesExclues objects filtered by the id_blob column
 * @method array findByTailleDocument(string $taille_document) Return CommonSocietesExclues objects filtered by the taille_document column
 * @method array findByIdentifiantEntreprise(string $identifiant_entreprise) Return CommonSocietesExclues objects filtered by the identifiant_entreprise column
 * @method array findByRaisonSociale(string $raison_sociale) Return CommonSocietesExclues objects filtered by the raison_sociale column
 * @method array findByMotif(string $motif) Return CommonSocietesExclues objects filtered by the motif column
 * @method array findByRaisonSocialeFr(string $raison_sociale_fr) Return CommonSocietesExclues objects filtered by the raison_sociale_fr column
 * @method array findByMotifFr(string $motif_fr) Return CommonSocietesExclues objects filtered by the motif_fr column
 * @method array findByRaisonSocialeAr(string $raison_sociale_ar) Return CommonSocietesExclues objects filtered by the raison_sociale_ar column
 * @method array findByMotifAr(string $motif_ar) Return CommonSocietesExclues objects filtered by the motif_ar column
 * @method array findByTypeExclusion(string $type_exclusion) Return CommonSocietesExclues objects filtered by the type_exclusion column
 * @method array findByDateDebutExclusion(string $date_debut_exclusion) Return CommonSocietesExclues objects filtered by the date_debut_exclusion column
 * @method array findByDateFinExclusion(string $date_fin_exclusion) Return CommonSocietesExclues objects filtered by the date_fin_exclusion column
 * @method array findByTypePortee(string $type_portee) Return CommonSocietesExclues objects filtered by the type_portee column
 * @method array findByRaisonSocialeIt(string $raison_sociale_it) Return CommonSocietesExclues objects filtered by the raison_sociale_it column
 * @method array findByMotifIt(string $motif_it) Return CommonSocietesExclues objects filtered by the motif_it column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonSocietesExcluesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSocietesExcluesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSocietesExclues', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSocietesExcluesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSocietesExcluesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSocietesExcluesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSocietesExcluesQuery) {
            return $criteria;
        }
        $query = new CommonSocietesExcluesQuery();
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
     * @return   CommonSocietesExclues|CommonSocietesExclues[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSocietesExcluesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSocietesExclues A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdSocietesExclues($key, $con = null)
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
     * @return                 CommonSocietesExclues A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_societes_exclues`, `organisme_acronyme`, `id_service`, `id_agent`, `nom_document`, `id_blob`, `taille_document`, `identifiant_entreprise`, `raison_sociale`, `motif`, `raison_sociale_fr`, `motif_fr`, `raison_sociale_ar`, `motif_ar`, `type_exclusion`, `date_debut_exclusion`, `date_fin_exclusion`, `type_portee`, `raison_sociale_it`, `motif_it` FROM `Societes_Exclues` WHERE `id_societes_exclues` = :p0';
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
            $obj = new CommonSocietesExclues();
            $obj->hydrate($row);
            CommonSocietesExcluesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSocietesExclues|CommonSocietesExclues[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSocietesExclues[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_societes_exclues column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSocietesExclues(1234); // WHERE id_societes_exclues = 1234
     * $query->filterByIdSocietesExclues(array(12, 34)); // WHERE id_societes_exclues IN (12, 34)
     * $query->filterByIdSocietesExclues(array('min' => 12)); // WHERE id_societes_exclues >= 12
     * $query->filterByIdSocietesExclues(array('max' => 12)); // WHERE id_societes_exclues <= 12
     * </code>
     *
     * @param     mixed $idSocietesExclues The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByIdSocietesExclues($idSocietesExclues = null, $comparison = null)
    {
        if (is_array($idSocietesExclues)) {
            $useMinMax = false;
            if (isset($idSocietesExclues['min'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $idSocietesExclues['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSocietesExclues['max'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $idSocietesExclues['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $idSocietesExclues, $comparison);
    }

    /**
     * Filter the query on the organisme_acronyme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeAcronyme('fooValue');   // WHERE organisme_acronyme = 'fooValue'
     * $query->filterByOrganismeAcronyme('%fooValue%'); // WHERE organisme_acronyme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismeAcronyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByOrganismeAcronyme($organismeAcronyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismeAcronyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismeAcronyme)) {
                $organismeAcronyme = str_replace('*', '%', $organismeAcronyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::ORGANISME_ACRONYME, $organismeAcronyme, $comparison);
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
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SERVICE, $idService, $comparison);
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
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the nom_document column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocument('fooValue');   // WHERE nom_document = 'fooValue'
     * $query->filterByNomDocument('%fooValue%'); // WHERE nom_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByNomDocument($nomDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocument)) {
                $nomDocument = str_replace('*', '%', $nomDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::NOM_DOCUMENT, $nomDocument, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonSocietesExcluesPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the taille_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleDocument('fooValue');   // WHERE taille_document = 'fooValue'
     * $query->filterByTailleDocument('%fooValue%'); // WHERE taille_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tailleDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByTailleDocument($tailleDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tailleDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tailleDocument)) {
                $tailleDocument = str_replace('*', '%', $tailleDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::TAILLE_DOCUMENT, $tailleDocument, $comparison);
    }

    /**
     * Filter the query on the identifiant_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantEntreprise('fooValue');   // WHERE identifiant_entreprise = 'fooValue'
     * $query->filterByIdentifiantEntreprise('%fooValue%'); // WHERE identifiant_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByIdentifiantEntreprise($identifiantEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantEntreprise)) {
                $identifiantEntreprise = str_replace('*', '%', $identifiantEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE, $identifiantEntreprise, $comparison);
    }

    /**
     * Filter the query on the raison_sociale column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSociale('fooValue');   // WHERE raison_sociale = 'fooValue'
     * $query->filterByRaisonSociale('%fooValue%'); // WHERE raison_sociale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSocietesExcluesPeer::RAISON_SOCIALE, $raisonSociale, $comparison);
    }

    /**
     * Filter the query on the motif column
     *
     * Example usage:
     * <code>
     * $query->filterByMotif('fooValue');   // WHERE motif = 'fooValue'
     * $query->filterByMotif('%fooValue%'); // WHERE motif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByMotif($motif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motif)) {
                $motif = str_replace('*', '%', $motif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::MOTIF, $motif, $comparison);
    }

    /**
     * Filter the query on the raison_sociale_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSocialeFr('fooValue');   // WHERE raison_sociale_fr = 'fooValue'
     * $query->filterByRaisonSocialeFr('%fooValue%'); // WHERE raison_sociale_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSocialeFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByRaisonSocialeFr($raisonSocialeFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSocialeFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSocialeFr)) {
                $raisonSocialeFr = str_replace('*', '%', $raisonSocialeFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::RAISON_SOCIALE_FR, $raisonSocialeFr, $comparison);
    }

    /**
     * Filter the query on the motif_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifFr('fooValue');   // WHERE motif_fr = 'fooValue'
     * $query->filterByMotifFr('%fooValue%'); // WHERE motif_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByMotifFr($motifFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifFr)) {
                $motifFr = str_replace('*', '%', $motifFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::MOTIF_FR, $motifFr, $comparison);
    }

    /**
     * Filter the query on the raison_sociale_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSocialeAr('fooValue');   // WHERE raison_sociale_ar = 'fooValue'
     * $query->filterByRaisonSocialeAr('%fooValue%'); // WHERE raison_sociale_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSocialeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByRaisonSocialeAr($raisonSocialeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSocialeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSocialeAr)) {
                $raisonSocialeAr = str_replace('*', '%', $raisonSocialeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::RAISON_SOCIALE_AR, $raisonSocialeAr, $comparison);
    }

    /**
     * Filter the query on the motif_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifAr('fooValue');   // WHERE motif_ar = 'fooValue'
     * $query->filterByMotifAr('%fooValue%'); // WHERE motif_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByMotifAr($motifAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifAr)) {
                $motifAr = str_replace('*', '%', $motifAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::MOTIF_AR, $motifAr, $comparison);
    }

    /**
     * Filter the query on the type_exclusion column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeExclusion('fooValue');   // WHERE type_exclusion = 'fooValue'
     * $query->filterByTypeExclusion('%fooValue%'); // WHERE type_exclusion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeExclusion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByTypeExclusion($typeExclusion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeExclusion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeExclusion)) {
                $typeExclusion = str_replace('*', '%', $typeExclusion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::TYPE_EXCLUSION, $typeExclusion, $comparison);
    }

    /**
     * Filter the query on the date_debut_exclusion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebutExclusion('fooValue');   // WHERE date_debut_exclusion = 'fooValue'
     * $query->filterByDateDebutExclusion('%fooValue%'); // WHERE date_debut_exclusion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDebutExclusion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByDateDebutExclusion($dateDebutExclusion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDebutExclusion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDebutExclusion)) {
                $dateDebutExclusion = str_replace('*', '%', $dateDebutExclusion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION, $dateDebutExclusion, $comparison);
    }

    /**
     * Filter the query on the date_fin_exclusion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinExclusion('fooValue');   // WHERE date_fin_exclusion = 'fooValue'
     * $query->filterByDateFinExclusion('%fooValue%'); // WHERE date_fin_exclusion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinExclusion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByDateFinExclusion($dateFinExclusion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinExclusion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinExclusion)) {
                $dateFinExclusion = str_replace('*', '%', $dateFinExclusion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION, $dateFinExclusion, $comparison);
    }

    /**
     * Filter the query on the type_portee column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePortee('fooValue');   // WHERE type_portee = 'fooValue'
     * $query->filterByTypePortee('%fooValue%'); // WHERE type_portee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typePortee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByTypePortee($typePortee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typePortee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typePortee)) {
                $typePortee = str_replace('*', '%', $typePortee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::TYPE_PORTEE, $typePortee, $comparison);
    }

    /**
     * Filter the query on the raison_sociale_it column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSocialeIt('fooValue');   // WHERE raison_sociale_it = 'fooValue'
     * $query->filterByRaisonSocialeIt('%fooValue%'); // WHERE raison_sociale_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSocialeIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByRaisonSocialeIt($raisonSocialeIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSocialeIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSocialeIt)) {
                $raisonSocialeIt = str_replace('*', '%', $raisonSocialeIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::RAISON_SOCIALE_IT, $raisonSocialeIt, $comparison);
    }

    /**
     * Filter the query on the motif_it column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifIt('fooValue');   // WHERE motif_it = 'fooValue'
     * $query->filterByMotifIt('%fooValue%'); // WHERE motif_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function filterByMotifIt($motifIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifIt)) {
                $motifIt = str_replace('*', '%', $motifIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocietesExcluesPeer::MOTIF_IT, $motifIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSocietesExclues $commonSocietesExclues Object to remove from the list of results
     *
     * @return CommonSocietesExcluesQuery The current query, for fluid interface
     */
    public function prune($commonSocietesExclues = null)
    {
        if ($commonSocietesExclues) {
            $this->addUsingAlias(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $commonSocietesExclues->getIdSocietesExclues(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
