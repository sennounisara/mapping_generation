<?php


/**
 * Base class that represents a query for the 'Referentiel_org_denomination' table.
 *
 * 
 *
 * @method CommonReferentielOrgDenominationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielOrgDenominationQuery orderByDenomination($order = Criteria::ASC) Order by the denomination column
 * @method CommonReferentielOrgDenominationQuery orderByDenominationAdapte($order = Criteria::ASC) Order by the denomination_adapte column
 * @method CommonReferentielOrgDenominationQuery orderByDenominationNormalise($order = Criteria::ASC) Order by the denomination_normalise column
 * @method CommonReferentielOrgDenominationQuery orderByTraite($order = Criteria::ASC) Order by the traite column
 * @method CommonReferentielOrgDenominationQuery orderByActifRechercheAvancee($order = Criteria::ASC) Order by the actif_recherche_avancee column
 * @method CommonReferentielOrgDenominationQuery orderByDateMajActifRechercheAvancee($order = Criteria::ASC) Order by the date_maj_actif_recherche_avancee column
 *
 * @method CommonReferentielOrgDenominationQuery groupById() Group by the id column
 * @method CommonReferentielOrgDenominationQuery groupByDenomination() Group by the denomination column
 * @method CommonReferentielOrgDenominationQuery groupByDenominationAdapte() Group by the denomination_adapte column
 * @method CommonReferentielOrgDenominationQuery groupByDenominationNormalise() Group by the denomination_normalise column
 * @method CommonReferentielOrgDenominationQuery groupByTraite() Group by the traite column
 * @method CommonReferentielOrgDenominationQuery groupByActifRechercheAvancee() Group by the actif_recherche_avancee column
 * @method CommonReferentielOrgDenominationQuery groupByDateMajActifRechercheAvancee() Group by the date_maj_actif_recherche_avancee column
 *
 * @method CommonReferentielOrgDenominationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielOrgDenominationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielOrgDenominationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielOrgDenomination findOne(PropelPDO $con = null) Return the first CommonReferentielOrgDenomination matching the query
 * @method CommonReferentielOrgDenomination findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielOrgDenomination matching the query, or a new CommonReferentielOrgDenomination object populated from the query conditions when no match is found
 *
 * @method CommonReferentielOrgDenomination findOneByDenomination(string $denomination) Return the first CommonReferentielOrgDenomination filtered by the denomination column
 * @method CommonReferentielOrgDenomination findOneByDenominationAdapte(string $denomination_adapte) Return the first CommonReferentielOrgDenomination filtered by the denomination_adapte column
 * @method CommonReferentielOrgDenomination findOneByDenominationNormalise(string $denomination_normalise) Return the first CommonReferentielOrgDenomination filtered by the denomination_normalise column
 * @method CommonReferentielOrgDenomination findOneByTraite(string $traite) Return the first CommonReferentielOrgDenomination filtered by the traite column
 * @method CommonReferentielOrgDenomination findOneByActifRechercheAvancee(string $actif_recherche_avancee) Return the first CommonReferentielOrgDenomination filtered by the actif_recherche_avancee column
 * @method CommonReferentielOrgDenomination findOneByDateMajActifRechercheAvancee(string $date_maj_actif_recherche_avancee) Return the first CommonReferentielOrgDenomination filtered by the date_maj_actif_recherche_avancee column
 *
 * @method array findById(int $id) Return CommonReferentielOrgDenomination objects filtered by the id column
 * @method array findByDenomination(string $denomination) Return CommonReferentielOrgDenomination objects filtered by the denomination column
 * @method array findByDenominationAdapte(string $denomination_adapte) Return CommonReferentielOrgDenomination objects filtered by the denomination_adapte column
 * @method array findByDenominationNormalise(string $denomination_normalise) Return CommonReferentielOrgDenomination objects filtered by the denomination_normalise column
 * @method array findByTraite(string $traite) Return CommonReferentielOrgDenomination objects filtered by the traite column
 * @method array findByActifRechercheAvancee(string $actif_recherche_avancee) Return CommonReferentielOrgDenomination objects filtered by the actif_recherche_avancee column
 * @method array findByDateMajActifRechercheAvancee(string $date_maj_actif_recherche_avancee) Return CommonReferentielOrgDenomination objects filtered by the date_maj_actif_recherche_avancee column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonReferentielOrgDenominationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielOrgDenominationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielOrgDenomination', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielOrgDenominationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielOrgDenominationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielOrgDenominationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielOrgDenominationQuery) {
            return $criteria;
        }
        $query = new CommonReferentielOrgDenominationQuery();
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
     * @return   CommonReferentielOrgDenomination|CommonReferentielOrgDenomination[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielOrgDenominationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielOrgDenominationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielOrgDenomination A model object, or null if the key is not found
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
     * @return                 CommonReferentielOrgDenomination A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `denomination`, `denomination_adapte`, `denomination_normalise`, `traite`, `actif_recherche_avancee`, `date_maj_actif_recherche_avancee` FROM `Referentiel_org_denomination` WHERE `id` = :p0';
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
            $obj = new CommonReferentielOrgDenomination();
            $obj->hydrate($row);
            CommonReferentielOrgDenominationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReferentielOrgDenomination|CommonReferentielOrgDenomination[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielOrgDenomination[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielOrgDenominationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielOrgDenominationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the denomination column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination('fooValue');   // WHERE denomination = 'fooValue'
     * $query->filterByDenomination('%fooValue%'); // WHERE denomination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByDenomination($denomination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination)) {
                $denomination = str_replace('*', '%', $denomination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::DENOMINATION, $denomination, $comparison);
    }

    /**
     * Filter the query on the denomination_adapte column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationAdapte('fooValue');   // WHERE denomination_adapte = 'fooValue'
     * $query->filterByDenominationAdapte('%fooValue%'); // WHERE denomination_adapte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationAdapte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByDenominationAdapte($denominationAdapte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationAdapte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationAdapte)) {
                $denominationAdapte = str_replace('*', '%', $denominationAdapte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::DENOMINATION_ADAPTE, $denominationAdapte, $comparison);
    }

    /**
     * Filter the query on the denomination_normalise column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationNormalise('fooValue');   // WHERE denomination_normalise = 'fooValue'
     * $query->filterByDenominationNormalise('%fooValue%'); // WHERE denomination_normalise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationNormalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByDenominationNormalise($denominationNormalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationNormalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationNormalise)) {
                $denominationNormalise = str_replace('*', '%', $denominationNormalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::DENOMINATION_NORMALISE, $denominationNormalise, $comparison);
    }

    /**
     * Filter the query on the traite column
     *
     * Example usage:
     * <code>
     * $query->filterByTraite('fooValue');   // WHERE traite = 'fooValue'
     * $query->filterByTraite('%fooValue%'); // WHERE traite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByTraite($traite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traite)) {
                $traite = str_replace('*', '%', $traite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::TRAITE, $traite, $comparison);
    }

    /**
     * Filter the query on the actif_recherche_avancee column
     *
     * Example usage:
     * <code>
     * $query->filterByActifRechercheAvancee('fooValue');   // WHERE actif_recherche_avancee = 'fooValue'
     * $query->filterByActifRechercheAvancee('%fooValue%'); // WHERE actif_recherche_avancee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actifRechercheAvancee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByActifRechercheAvancee($actifRechercheAvancee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actifRechercheAvancee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actifRechercheAvancee)) {
                $actifRechercheAvancee = str_replace('*', '%', $actifRechercheAvancee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::ACTIF_RECHERCHE_AVANCEE, $actifRechercheAvancee, $comparison);
    }

    /**
     * Filter the query on the date_maj_actif_recherche_avancee column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMajActifRechercheAvancee('fooValue');   // WHERE date_maj_actif_recherche_avancee = 'fooValue'
     * $query->filterByDateMajActifRechercheAvancee('%fooValue%'); // WHERE date_maj_actif_recherche_avancee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateMajActifRechercheAvancee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function filterByDateMajActifRechercheAvancee($dateMajActifRechercheAvancee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateMajActifRechercheAvancee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateMajActifRechercheAvancee)) {
                $dateMajActifRechercheAvancee = str_replace('*', '%', $dateMajActifRechercheAvancee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgDenominationPeer::DATE_MAJ_ACTIF_RECHERCHE_AVANCEE, $dateMajActifRechercheAvancee, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielOrgDenomination $commonReferentielOrgDenomination Object to remove from the list of results
     *
     * @return CommonReferentielOrgDenominationQuery The current query, for fluid interface
     */
    public function prune($commonReferentielOrgDenomination = null)
    {
        if ($commonReferentielOrgDenomination) {
            $this->addUsingAlias(CommonReferentielOrgDenominationPeer::ID, $commonReferentielOrgDenomination->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
