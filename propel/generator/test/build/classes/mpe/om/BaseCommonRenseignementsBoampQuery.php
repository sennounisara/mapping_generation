<?php


/**
 * Base class that represents a query for the 'renseignements_boamp' table.
 *
 * 
 *
 * @method CommonRenseignementsBoampQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonRenseignementsBoampQuery orderByAcronymeorg($order = Criteria::ASC) Order by the acronymeOrg column
 * @method CommonRenseignementsBoampQuery orderByIdType($order = Criteria::ASC) Order by the id_type column
 * @method CommonRenseignementsBoampQuery orderByIdCompte($order = Criteria::ASC) Order by the id_compte column
 * @method CommonRenseignementsBoampQuery orderByCorrespondant($order = Criteria::ASC) Order by the correspondant column
 * @method CommonRenseignementsBoampQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonRenseignementsBoampQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonRenseignementsBoampQuery orderByCp($order = Criteria::ASC) Order by the cp column
 * @method CommonRenseignementsBoampQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonRenseignementsBoampQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonRenseignementsBoampQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonRenseignementsBoampQuery orderByPoste($order = Criteria::ASC) Order by the poste column
 * @method CommonRenseignementsBoampQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonRenseignementsBoampQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonRenseignementsBoampQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method CommonRenseignementsBoampQuery orderByOrganeChargeProcedure($order = Criteria::ASC) Order by the organe_charge_procedure column
 *
 * @method CommonRenseignementsBoampQuery groupById() Group by the id column
 * @method CommonRenseignementsBoampQuery groupByAcronymeorg() Group by the acronymeOrg column
 * @method CommonRenseignementsBoampQuery groupByIdType() Group by the id_type column
 * @method CommonRenseignementsBoampQuery groupByIdCompte() Group by the id_compte column
 * @method CommonRenseignementsBoampQuery groupByCorrespondant() Group by the correspondant column
 * @method CommonRenseignementsBoampQuery groupByOrganisme() Group by the organisme column
 * @method CommonRenseignementsBoampQuery groupByAdresse() Group by the adresse column
 * @method CommonRenseignementsBoampQuery groupByCp() Group by the cp column
 * @method CommonRenseignementsBoampQuery groupByVille() Group by the ville column
 * @method CommonRenseignementsBoampQuery groupByPays() Group by the pays column
 * @method CommonRenseignementsBoampQuery groupByTelephone() Group by the telephone column
 * @method CommonRenseignementsBoampQuery groupByPoste() Group by the poste column
 * @method CommonRenseignementsBoampQuery groupByFax() Group by the fax column
 * @method CommonRenseignementsBoampQuery groupByMail() Group by the mail column
 * @method CommonRenseignementsBoampQuery groupByUrl() Group by the url column
 * @method CommonRenseignementsBoampQuery groupByOrganeChargeProcedure() Group by the organe_charge_procedure column
 *
 * @method CommonRenseignementsBoampQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonRenseignementsBoampQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonRenseignementsBoampQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonRenseignementsBoamp findOne(PropelPDO $con = null) Return the first CommonRenseignementsBoamp matching the query
 * @method CommonRenseignementsBoamp findOneOrCreate(PropelPDO $con = null) Return the first CommonRenseignementsBoamp matching the query, or a new CommonRenseignementsBoamp object populated from the query conditions when no match is found
 *
 * @method CommonRenseignementsBoamp findOneById(int $id) Return the first CommonRenseignementsBoamp filtered by the id column
 * @method CommonRenseignementsBoamp findOneByAcronymeorg(string $acronymeOrg) Return the first CommonRenseignementsBoamp filtered by the acronymeOrg column
 * @method CommonRenseignementsBoamp findOneByIdType(int $id_type) Return the first CommonRenseignementsBoamp filtered by the id_type column
 * @method CommonRenseignementsBoamp findOneByIdCompte(int $id_compte) Return the first CommonRenseignementsBoamp filtered by the id_compte column
 * @method CommonRenseignementsBoamp findOneByCorrespondant(string $correspondant) Return the first CommonRenseignementsBoamp filtered by the correspondant column
 * @method CommonRenseignementsBoamp findOneByOrganisme(string $organisme) Return the first CommonRenseignementsBoamp filtered by the organisme column
 * @method CommonRenseignementsBoamp findOneByAdresse(string $adresse) Return the first CommonRenseignementsBoamp filtered by the adresse column
 * @method CommonRenseignementsBoamp findOneByCp(string $cp) Return the first CommonRenseignementsBoamp filtered by the cp column
 * @method CommonRenseignementsBoamp findOneByVille(string $ville) Return the first CommonRenseignementsBoamp filtered by the ville column
 * @method CommonRenseignementsBoamp findOneByPays(string $pays) Return the first CommonRenseignementsBoamp filtered by the pays column
 * @method CommonRenseignementsBoamp findOneByTelephone(string $telephone) Return the first CommonRenseignementsBoamp filtered by the telephone column
 * @method CommonRenseignementsBoamp findOneByPoste(string $poste) Return the first CommonRenseignementsBoamp filtered by the poste column
 * @method CommonRenseignementsBoamp findOneByFax(string $fax) Return the first CommonRenseignementsBoamp filtered by the fax column
 * @method CommonRenseignementsBoamp findOneByMail(string $mail) Return the first CommonRenseignementsBoamp filtered by the mail column
 * @method CommonRenseignementsBoamp findOneByUrl(string $url) Return the first CommonRenseignementsBoamp filtered by the url column
 * @method CommonRenseignementsBoamp findOneByOrganeChargeProcedure(string $organe_charge_procedure) Return the first CommonRenseignementsBoamp filtered by the organe_charge_procedure column
 *
 * @method array findById(int $id) Return CommonRenseignementsBoamp objects filtered by the id column
 * @method array findByAcronymeorg(string $acronymeOrg) Return CommonRenseignementsBoamp objects filtered by the acronymeOrg column
 * @method array findByIdType(int $id_type) Return CommonRenseignementsBoamp objects filtered by the id_type column
 * @method array findByIdCompte(int $id_compte) Return CommonRenseignementsBoamp objects filtered by the id_compte column
 * @method array findByCorrespondant(string $correspondant) Return CommonRenseignementsBoamp objects filtered by the correspondant column
 * @method array findByOrganisme(string $organisme) Return CommonRenseignementsBoamp objects filtered by the organisme column
 * @method array findByAdresse(string $adresse) Return CommonRenseignementsBoamp objects filtered by the adresse column
 * @method array findByCp(string $cp) Return CommonRenseignementsBoamp objects filtered by the cp column
 * @method array findByVille(string $ville) Return CommonRenseignementsBoamp objects filtered by the ville column
 * @method array findByPays(string $pays) Return CommonRenseignementsBoamp objects filtered by the pays column
 * @method array findByTelephone(string $telephone) Return CommonRenseignementsBoamp objects filtered by the telephone column
 * @method array findByPoste(string $poste) Return CommonRenseignementsBoamp objects filtered by the poste column
 * @method array findByFax(string $fax) Return CommonRenseignementsBoamp objects filtered by the fax column
 * @method array findByMail(string $mail) Return CommonRenseignementsBoamp objects filtered by the mail column
 * @method array findByUrl(string $url) Return CommonRenseignementsBoamp objects filtered by the url column
 * @method array findByOrganeChargeProcedure(string $organe_charge_procedure) Return CommonRenseignementsBoamp objects filtered by the organe_charge_procedure column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonRenseignementsBoampQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonRenseignementsBoampQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonRenseignementsBoamp', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonRenseignementsBoampQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonRenseignementsBoampQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonRenseignementsBoampQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonRenseignementsBoampQuery) {
            return $criteria;
        }
        $query = new CommonRenseignementsBoampQuery();
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
                         A Primary key composition: [$id, $acronymeOrg]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonRenseignementsBoamp|CommonRenseignementsBoamp[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonRenseignementsBoampPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRenseignementsBoamp A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `acronymeOrg`, `id_type`, `id_compte`, `correspondant`, `organisme`, `adresse`, `cp`, `ville`, `pays`, `telephone`, `poste`, `fax`, `mail`, `url`, `organe_charge_procedure` FROM `renseignements_boamp` WHERE `id` = :p0 AND `acronymeOrg` = :p1';
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
            $obj = new CommonRenseignementsBoamp();
            $obj->hydrate($row);
            CommonRenseignementsBoampPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonRenseignementsBoamp|CommonRenseignementsBoamp[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonRenseignementsBoamp[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonRenseignementsBoampPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonRenseignementsBoampPeer::ACRONYMEORG, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonRenseignementsBoampPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonRenseignementsBoampPeer::ACRONYMEORG, $key[1], Criteria::EQUAL);
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
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonRenseignementsBoampPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonRenseignementsBoampPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the acronymeOrg column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymeorg('fooValue');   // WHERE acronymeOrg = 'fooValue'
     * $query->filterByAcronymeorg('%fooValue%'); // WHERE acronymeOrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymeorg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByAcronymeorg($acronymeorg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymeorg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymeorg)) {
                $acronymeorg = str_replace('*', '%', $acronymeorg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::ACRONYMEORG, $acronymeorg, $comparison);
    }

    /**
     * Filter the query on the id_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdType(1234); // WHERE id_type = 1234
     * $query->filterByIdType(array(12, 34)); // WHERE id_type IN (12, 34)
     * $query->filterByIdType(array('min' => 12)); // WHERE id_type >= 12
     * $query->filterByIdType(array('max' => 12)); // WHERE id_type <= 12
     * </code>
     *
     * @param     mixed $idType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByIdType($idType = null, $comparison = null)
    {
        if (is_array($idType)) {
            $useMinMax = false;
            if (isset($idType['min'])) {
                $this->addUsingAlias(CommonRenseignementsBoampPeer::ID_TYPE, $idType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idType['max'])) {
                $this->addUsingAlias(CommonRenseignementsBoampPeer::ID_TYPE, $idType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::ID_TYPE, $idType, $comparison);
    }

    /**
     * Filter the query on the id_compte column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompte(1234); // WHERE id_compte = 1234
     * $query->filterByIdCompte(array(12, 34)); // WHERE id_compte IN (12, 34)
     * $query->filterByIdCompte(array('min' => 12)); // WHERE id_compte >= 12
     * $query->filterByIdCompte(array('max' => 12)); // WHERE id_compte <= 12
     * </code>
     *
     * @param     mixed $idCompte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByIdCompte($idCompte = null, $comparison = null)
    {
        if (is_array($idCompte)) {
            $useMinMax = false;
            if (isset($idCompte['min'])) {
                $this->addUsingAlias(CommonRenseignementsBoampPeer::ID_COMPTE, $idCompte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompte['max'])) {
                $this->addUsingAlias(CommonRenseignementsBoampPeer::ID_COMPTE, $idCompte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::ID_COMPTE, $idCompte, $comparison);
    }

    /**
     * Filter the query on the correspondant column
     *
     * Example usage:
     * <code>
     * $query->filterByCorrespondant('fooValue');   // WHERE correspondant = 'fooValue'
     * $query->filterByCorrespondant('%fooValue%'); // WHERE correspondant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $correspondant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByCorrespondant($correspondant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($correspondant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $correspondant)) {
                $correspondant = str_replace('*', '%', $correspondant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::CORRESPONDANT, $correspondant, $comparison);
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
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the cp column
     *
     * Example usage:
     * <code>
     * $query->filterByCp('fooValue');   // WHERE cp = 'fooValue'
     * $query->filterByCp('%fooValue%'); // WHERE cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByCp($cp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cp)) {
                $cp = str_replace('*', '%', $cp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::CP, $cp, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the poste column
     *
     * Example usage:
     * <code>
     * $query->filterByPoste('fooValue');   // WHERE poste = 'fooValue'
     * $query->filterByPoste('%fooValue%'); // WHERE poste LIKE '%fooValue%'
     * </code>
     *
     * @param     string $poste The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByPoste($poste = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($poste)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $poste)) {
                $poste = str_replace('*', '%', $poste);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::POSTE, $poste, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the organe_charge_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganeChargeProcedure('fooValue');   // WHERE organe_charge_procedure = 'fooValue'
     * $query->filterByOrganeChargeProcedure('%fooValue%'); // WHERE organe_charge_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organeChargeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function filterByOrganeChargeProcedure($organeChargeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organeChargeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organeChargeProcedure)) {
                $organeChargeProcedure = str_replace('*', '%', $organeChargeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRenseignementsBoampPeer::ORGANE_CHARGE_PROCEDURE, $organeChargeProcedure, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonRenseignementsBoamp $commonRenseignementsBoamp Object to remove from the list of results
     *
     * @return CommonRenseignementsBoampQuery The current query, for fluid interface
     */
    public function prune($commonRenseignementsBoamp = null)
    {
        if ($commonRenseignementsBoamp) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonRenseignementsBoampPeer::ID), $commonRenseignementsBoamp->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonRenseignementsBoampPeer::ACRONYMEORG), $commonRenseignementsBoamp->getAcronymeorg(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
