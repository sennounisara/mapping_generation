<?php


/**
 * Base class that represents a query for the 'mandataire' table.
 *
 * 
 *
 * @method CommonMandataireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonMandataireQuery orderByIdGroupement($order = Criteria::ASC) Order by the id_groupement column
 * @method CommonMandataireQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonMandataireQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonMandataireQuery orderByTypeMandataire($order = Criteria::ASC) Order by the type_mandataire column
 * @method CommonMandataireQuery orderByRcVille($order = Criteria::ASC) Order by the rc_ville column
 * @method CommonMandataireQuery orderByRcNumero($order = Criteria::ASC) Order by the rc_numero column
 * @method CommonMandataireQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonMandataireQuery orderByStatutInvitation($order = Criteria::ASC) Order by the statut_invitation column
 *
 * @method CommonMandataireQuery groupById() Group by the id column
 * @method CommonMandataireQuery groupByIdGroupement() Group by the id_groupement column
 * @method CommonMandataireQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonMandataireQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonMandataireQuery groupByTypeMandataire() Group by the type_mandataire column
 * @method CommonMandataireQuery groupByRcVille() Group by the rc_ville column
 * @method CommonMandataireQuery groupByRcNumero() Group by the rc_numero column
 * @method CommonMandataireQuery groupByMail() Group by the mail column
 * @method CommonMandataireQuery groupByStatutInvitation() Group by the statut_invitation column
 *
 * @method CommonMandataireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMandataireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMandataireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMandataireQuery leftJoinCommonGroupement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonGroupement relation
 * @method CommonMandataireQuery rightJoinCommonGroupement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonGroupement relation
 * @method CommonMandataireQuery innerJoinCommonGroupement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonGroupement relation
 *
 * @method CommonMandataire findOne(PropelPDO $con = null) Return the first CommonMandataire matching the query
 * @method CommonMandataire findOneOrCreate(PropelPDO $con = null) Return the first CommonMandataire matching the query, or a new CommonMandataire object populated from the query conditions when no match is found
 *
 * @method CommonMandataire findOneByIdGroupement(int $id_groupement) Return the first CommonMandataire filtered by the id_groupement column
 * @method CommonMandataire findOneByIdEntreprise(int $id_entreprise) Return the first CommonMandataire filtered by the id_entreprise column
 * @method CommonMandataire findOneByIdInscrit(int $id_inscrit) Return the first CommonMandataire filtered by the id_inscrit column
 * @method CommonMandataire findOneByTypeMandataire(string $type_mandataire) Return the first CommonMandataire filtered by the type_mandataire column
 * @method CommonMandataire findOneByRcVille(int $rc_ville) Return the first CommonMandataire filtered by the rc_ville column
 * @method CommonMandataire findOneByRcNumero(int $rc_numero) Return the first CommonMandataire filtered by the rc_numero column
 * @method CommonMandataire findOneByMail(string $mail) Return the first CommonMandataire filtered by the mail column
 * @method CommonMandataire findOneByStatutInvitation(string $statut_invitation) Return the first CommonMandataire filtered by the statut_invitation column
 *
 * @method array findById(int $id) Return CommonMandataire objects filtered by the id column
 * @method array findByIdGroupement(int $id_groupement) Return CommonMandataire objects filtered by the id_groupement column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonMandataire objects filtered by the id_entreprise column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonMandataire objects filtered by the id_inscrit column
 * @method array findByTypeMandataire(string $type_mandataire) Return CommonMandataire objects filtered by the type_mandataire column
 * @method array findByRcVille(int $rc_ville) Return CommonMandataire objects filtered by the rc_ville column
 * @method array findByRcNumero(int $rc_numero) Return CommonMandataire objects filtered by the rc_numero column
 * @method array findByMail(string $mail) Return CommonMandataire objects filtered by the mail column
 * @method array findByStatutInvitation(string $statut_invitation) Return CommonMandataire objects filtered by the statut_invitation column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonMandataireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMandataireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMandataire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMandataireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMandataireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMandataireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMandataireQuery) {
            return $criteria;
        }
        $query = new CommonMandataireQuery();
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
     * @return   CommonMandataire|CommonMandataire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMandatairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMandataire A model object, or null if the key is not found
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
     * @return                 CommonMandataire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_groupement`, `id_entreprise`, `id_inscrit`, `type_mandataire`, `rc_ville`, `rc_numero`, `mail`, `statut_invitation` FROM `mandataire` WHERE `id` = :p0';
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
            $obj = new CommonMandataire();
            $obj->hydrate($row);
            CommonMandatairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonMandataire|CommonMandataire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMandataire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonMandatairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonMandatairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_groupement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGroupement(1234); // WHERE id_groupement = 1234
     * $query->filterByIdGroupement(array(12, 34)); // WHERE id_groupement IN (12, 34)
     * $query->filterByIdGroupement(array('min' => 12)); // WHERE id_groupement >= 12
     * $query->filterByIdGroupement(array('max' => 12)); // WHERE id_groupement <= 12
     * </code>
     *
     * @see       filterByCommonGroupement()
     *
     * @param     mixed $idGroupement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByIdGroupement($idGroupement = null, $comparison = null)
    {
        if (is_array($idGroupement)) {
            $useMinMax = false;
            if (isset($idGroupement['min'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID_GROUPEMENT, $idGroupement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGroupement['max'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID_GROUPEMENT, $idGroupement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::ID_GROUPEMENT, $idGroupement, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonMandatairePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the type_mandataire column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeMandataire('fooValue');   // WHERE type_mandataire = 'fooValue'
     * $query->filterByTypeMandataire('%fooValue%'); // WHERE type_mandataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeMandataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByTypeMandataire($typeMandataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeMandataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeMandataire)) {
                $typeMandataire = str_replace('*', '%', $typeMandataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::TYPE_MANDATAIRE, $typeMandataire, $comparison);
    }

    /**
     * Filter the query on the rc_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByRcVille(1234); // WHERE rc_ville = 1234
     * $query->filterByRcVille(array(12, 34)); // WHERE rc_ville IN (12, 34)
     * $query->filterByRcVille(array('min' => 12)); // WHERE rc_ville >= 12
     * $query->filterByRcVille(array('max' => 12)); // WHERE rc_ville <= 12
     * </code>
     *
     * @param     mixed $rcVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByRcVille($rcVille = null, $comparison = null)
    {
        if (is_array($rcVille)) {
            $useMinMax = false;
            if (isset($rcVille['min'])) {
                $this->addUsingAlias(CommonMandatairePeer::RC_VILLE, $rcVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcVille['max'])) {
                $this->addUsingAlias(CommonMandatairePeer::RC_VILLE, $rcVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::RC_VILLE, $rcVille, $comparison);
    }

    /**
     * Filter the query on the rc_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByRcNumero(1234); // WHERE rc_numero = 1234
     * $query->filterByRcNumero(array(12, 34)); // WHERE rc_numero IN (12, 34)
     * $query->filterByRcNumero(array('min' => 12)); // WHERE rc_numero >= 12
     * $query->filterByRcNumero(array('max' => 12)); // WHERE rc_numero <= 12
     * </code>
     *
     * @param     mixed $rcNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByRcNumero($rcNumero = null, $comparison = null)
    {
        if (is_array($rcNumero)) {
            $useMinMax = false;
            if (isset($rcNumero['min'])) {
                $this->addUsingAlias(CommonMandatairePeer::RC_NUMERO, $rcNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcNumero['max'])) {
                $this->addUsingAlias(CommonMandatairePeer::RC_NUMERO, $rcNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::RC_NUMERO, $rcNumero, $comparison);
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
     * @return CommonMandataireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMandatairePeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the statut_invitation column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutInvitation('fooValue');   // WHERE statut_invitation = 'fooValue'
     * $query->filterByStatutInvitation('%fooValue%'); // WHERE statut_invitation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutInvitation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function filterByStatutInvitation($statutInvitation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutInvitation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutInvitation)) {
                $statutInvitation = str_replace('*', '%', $statutInvitation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMandatairePeer::STATUT_INVITATION, $statutInvitation, $comparison);
    }

    /**
     * Filter the query by a related CommonGroupement object
     *
     * @param   CommonGroupement|PropelObjectCollection $commonGroupement The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonMandataireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonGroupement($commonGroupement, $comparison = null)
    {
        if ($commonGroupement instanceof CommonGroupement) {
            return $this
                ->addUsingAlias(CommonMandatairePeer::ID_GROUPEMENT, $commonGroupement->getId(), $comparison);
        } elseif ($commonGroupement instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonMandatairePeer::ID_GROUPEMENT, $commonGroupement->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonGroupement() only accepts arguments of type CommonGroupement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonGroupement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function joinCommonGroupement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonGroupement');

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
            $this->addJoinObject($join, 'CommonGroupement');
        }

        return $this;
    }

    /**
     * Use the CommonGroupement relation CommonGroupement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonGroupementQuery A secondary query class using the current class as primary query
     */
    public function useCommonGroupementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonGroupement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonGroupement', 'CommonGroupementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMandataire $commonMandataire Object to remove from the list of results
     *
     * @return CommonMandataireQuery The current query, for fluid interface
     */
    public function prune($commonMandataire = null)
    {
        if ($commonMandataire) {
            $this->addUsingAlias(CommonMandatairePeer::ID, $commonMandataire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
