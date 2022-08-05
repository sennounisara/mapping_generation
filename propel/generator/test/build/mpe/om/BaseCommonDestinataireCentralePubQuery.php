<?php


/**
 * Base class that represents a query for the 'destinataire_centrale_pub' table.
 *
 * 
 *
 * @method CommonDestinataireCentralePubQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDestinataireCentralePubQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDestinataireCentralePubQuery orderByIdAnnonceJal($order = Criteria::ASC) Order by the id_annonce_jal column
 * @method CommonDestinataireCentralePubQuery orderByIdCompte($order = Criteria::ASC) Order by the id_compte column
 * @method CommonDestinataireCentralePubQuery orderByIdsJournaux($order = Criteria::ASC) Order by the ids_journaux column
 * @method CommonDestinataireCentralePubQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonDestinataireCentralePubQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonDestinataireCentralePubQuery orderByDatePub($order = Criteria::ASC) Order by the date_pub column
 * @method CommonDestinataireCentralePubQuery orderByAccuse($order = Criteria::ASC) Order by the accuse column
 * @method CommonDestinataireCentralePubQuery orderByIdEchange($order = Criteria::ASC) Order by the id_echange column
 * @method CommonDestinataireCentralePubQuery orderByDateAr($order = Criteria::ASC) Order by the date_ar column
 *
 * @method CommonDestinataireCentralePubQuery groupById() Group by the id column
 * @method CommonDestinataireCentralePubQuery groupByOrganisme() Group by the organisme column
 * @method CommonDestinataireCentralePubQuery groupByIdAnnonceJal() Group by the id_annonce_jal column
 * @method CommonDestinataireCentralePubQuery groupByIdCompte() Group by the id_compte column
 * @method CommonDestinataireCentralePubQuery groupByIdsJournaux() Group by the ids_journaux column
 * @method CommonDestinataireCentralePubQuery groupByStatut() Group by the statut column
 * @method CommonDestinataireCentralePubQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonDestinataireCentralePubQuery groupByDatePub() Group by the date_pub column
 * @method CommonDestinataireCentralePubQuery groupByAccuse() Group by the accuse column
 * @method CommonDestinataireCentralePubQuery groupByIdEchange() Group by the id_echange column
 * @method CommonDestinataireCentralePubQuery groupByDateAr() Group by the date_ar column
 *
 * @method CommonDestinataireCentralePubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDestinataireCentralePubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDestinataireCentralePubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDestinataireCentralePub findOne(PropelPDO $con = null) Return the first CommonDestinataireCentralePub matching the query
 * @method CommonDestinataireCentralePub findOneOrCreate(PropelPDO $con = null) Return the first CommonDestinataireCentralePub matching the query, or a new CommonDestinataireCentralePub object populated from the query conditions when no match is found
 *
 * @method CommonDestinataireCentralePub findOneById(int $id) Return the first CommonDestinataireCentralePub filtered by the id column
 * @method CommonDestinataireCentralePub findOneByOrganisme(string $organisme) Return the first CommonDestinataireCentralePub filtered by the organisme column
 * @method CommonDestinataireCentralePub findOneByIdAnnonceJal(int $id_annonce_jal) Return the first CommonDestinataireCentralePub filtered by the id_annonce_jal column
 * @method CommonDestinataireCentralePub findOneByIdCompte(int $id_compte) Return the first CommonDestinataireCentralePub filtered by the id_compte column
 * @method CommonDestinataireCentralePub findOneByIdsJournaux(string $ids_journaux) Return the first CommonDestinataireCentralePub filtered by the ids_journaux column
 * @method CommonDestinataireCentralePub findOneByStatut(string $statut) Return the first CommonDestinataireCentralePub filtered by the statut column
 * @method CommonDestinataireCentralePub findOneByDateEnvoi(string $date_envoi) Return the first CommonDestinataireCentralePub filtered by the date_envoi column
 * @method CommonDestinataireCentralePub findOneByDatePub(string $date_pub) Return the first CommonDestinataireCentralePub filtered by the date_pub column
 * @method CommonDestinataireCentralePub findOneByAccuse(string $accuse) Return the first CommonDestinataireCentralePub filtered by the accuse column
 * @method CommonDestinataireCentralePub findOneByIdEchange(int $id_echange) Return the first CommonDestinataireCentralePub filtered by the id_echange column
 * @method CommonDestinataireCentralePub findOneByDateAr(string $date_ar) Return the first CommonDestinataireCentralePub filtered by the date_ar column
 *
 * @method array findById(int $id) Return CommonDestinataireCentralePub objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonDestinataireCentralePub objects filtered by the organisme column
 * @method array findByIdAnnonceJal(int $id_annonce_jal) Return CommonDestinataireCentralePub objects filtered by the id_annonce_jal column
 * @method array findByIdCompte(int $id_compte) Return CommonDestinataireCentralePub objects filtered by the id_compte column
 * @method array findByIdsJournaux(string $ids_journaux) Return CommonDestinataireCentralePub objects filtered by the ids_journaux column
 * @method array findByStatut(string $statut) Return CommonDestinataireCentralePub objects filtered by the statut column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonDestinataireCentralePub objects filtered by the date_envoi column
 * @method array findByDatePub(string $date_pub) Return CommonDestinataireCentralePub objects filtered by the date_pub column
 * @method array findByAccuse(string $accuse) Return CommonDestinataireCentralePub objects filtered by the accuse column
 * @method array findByIdEchange(int $id_echange) Return CommonDestinataireCentralePub objects filtered by the id_echange column
 * @method array findByDateAr(string $date_ar) Return CommonDestinataireCentralePub objects filtered by the date_ar column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDestinataireCentralePubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDestinataireCentralePubQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDestinataireCentralePub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDestinataireCentralePubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDestinataireCentralePubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDestinataireCentralePubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDestinataireCentralePubQuery) {
            return $criteria;
        }
        $query = new CommonDestinataireCentralePubQuery();
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
     * @return   CommonDestinataireCentralePub|CommonDestinataireCentralePub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDestinataireCentralePubPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDestinataireCentralePubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDestinataireCentralePub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_annonce_jal`, `id_compte`, `ids_journaux`, `statut`, `date_envoi`, `date_pub`, `accuse`, `id_echange`, `date_ar` FROM `destinataire_centrale_pub` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonDestinataireCentralePub();
            $obj->hydrate($row);
            CommonDestinataireCentralePubPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDestinataireCentralePub|CommonDestinataireCentralePub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDestinataireCentralePub[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDestinataireCentralePubPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDestinataireCentralePubPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDestinataireCentralePubPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID, $id, $comparison);
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
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_annonce_jal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAnnonceJal(1234); // WHERE id_annonce_jal = 1234
     * $query->filterByIdAnnonceJal(array(12, 34)); // WHERE id_annonce_jal IN (12, 34)
     * $query->filterByIdAnnonceJal(array('min' => 12)); // WHERE id_annonce_jal >= 12
     * $query->filterByIdAnnonceJal(array('max' => 12)); // WHERE id_annonce_jal <= 12
     * </code>
     *
     * @param     mixed $idAnnonceJal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByIdAnnonceJal($idAnnonceJal = null, $comparison = null)
    {
        if (is_array($idAnnonceJal)) {
            $useMinMax = false;
            if (isset($idAnnonceJal['min'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_ANNONCE_JAL, $idAnnonceJal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAnnonceJal['max'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_ANNONCE_JAL, $idAnnonceJal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_ANNONCE_JAL, $idAnnonceJal, $comparison);
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
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByIdCompte($idCompte = null, $comparison = null)
    {
        if (is_array($idCompte)) {
            $useMinMax = false;
            if (isset($idCompte['min'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_COMPTE, $idCompte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompte['max'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_COMPTE, $idCompte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_COMPTE, $idCompte, $comparison);
    }

    /**
     * Filter the query on the ids_journaux column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsJournaux('fooValue');   // WHERE ids_journaux = 'fooValue'
     * $query->filterByIdsJournaux('%fooValue%'); // WHERE ids_journaux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsJournaux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByIdsJournaux($idsJournaux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsJournaux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsJournaux)) {
                $idsJournaux = str_replace('*', '%', $idsJournaux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::IDS_JOURNAUX, $idsJournaux, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('fooValue');   // WHERE date_envoi = 'fooValue'
     * $query->filterByDateEnvoi('%fooValue%'); // WHERE date_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoi)) {
                $dateEnvoi = str_replace('*', '%', $dateEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the date_pub column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePub('fooValue');   // WHERE date_pub = 'fooValue'
     * $query->filterByDatePub('%fooValue%'); // WHERE date_pub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datePub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByDatePub($datePub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datePub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datePub)) {
                $datePub = str_replace('*', '%', $datePub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::DATE_PUB, $datePub, $comparison);
    }

    /**
     * Filter the query on the accuse column
     *
     * Example usage:
     * <code>
     * $query->filterByAccuse('fooValue');   // WHERE accuse = 'fooValue'
     * $query->filterByAccuse('%fooValue%'); // WHERE accuse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accuse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByAccuse($accuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accuse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accuse)) {
                $accuse = str_replace('*', '%', $accuse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::ACCUSE, $accuse, $comparison);
    }

    /**
     * Filter the query on the id_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE id_echange = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE id_echange IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE id_echange >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE id_echange <= 12
     * </code>
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::ID_ECHANGE, $idEchange, $comparison);
    }

    /**
     * Filter the query on the date_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAr('fooValue');   // WHERE date_ar = 'fooValue'
     * $query->filterByDateAr('%fooValue%'); // WHERE date_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function filterByDateAr($dateAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAr)) {
                $dateAr = str_replace('*', '%', $dateAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireCentralePubPeer::DATE_AR, $dateAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDestinataireCentralePub $commonDestinataireCentralePub Object to remove from the list of results
     *
     * @return CommonDestinataireCentralePubQuery The current query, for fluid interface
     */
    public function prune($commonDestinataireCentralePub = null)
    {
        if ($commonDestinataireCentralePub) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDestinataireCentralePubPeer::ID), $commonDestinataireCentralePub->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDestinataireCentralePubPeer::ORGANISME), $commonDestinataireCentralePub->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
