<?php


/**
 * Base class that represents a query for the 't_compte_bancaire' table.
 *
 * 
 *
 * @method CommonTCompteBancaireQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method CommonTCompteBancaireQuery orderByIdEntreprise($order = Criteria::ASC) Order by the ID_ENTREPRISE column
 * @method CommonTCompteBancaireQuery orderByIdInscrit($order = Criteria::ASC) Order by the ID_INSCRIT column
 * @method CommonTCompteBancaireQuery orderByDenomination($order = Criteria::ASC) Order by the DENOMINATION column
 * @method CommonTCompteBancaireQuery orderByIdBanque($order = Criteria::ASC) Order by the ID_BANQUE column
 * @method CommonTCompteBancaireQuery orderByIdentifiantBancaire($order = Criteria::ASC) Order by the IDENTIFIANT_BANCAIRE column
 * @method CommonTCompteBancaireQuery orderByCodeVille($order = Criteria::ASC) Order by the CODE_VILLE column
 * @method CommonTCompteBancaireQuery orderByCodeAgence($order = Criteria::ASC) Order by the CODE_AGENCE column
 * @method CommonTCompteBancaireQuery orderByIdVille($order = Criteria::ASC) Order by the ID_VILLE column
 * @method CommonTCompteBancaireQuery orderBySupprime($order = Criteria::ASC) Order by the SUPPRIME column
 * @method CommonTCompteBancaireQuery orderByActif($order = Criteria::ASC) Order by the ACTIF column
 * @method CommonTCompteBancaireQuery orderByBancarise($order = Criteria::ASC) Order by the BANCARISE column
 *
 * @method CommonTCompteBancaireQuery groupById() Group by the ID column
 * @method CommonTCompteBancaireQuery groupByIdEntreprise() Group by the ID_ENTREPRISE column
 * @method CommonTCompteBancaireQuery groupByIdInscrit() Group by the ID_INSCRIT column
 * @method CommonTCompteBancaireQuery groupByDenomination() Group by the DENOMINATION column
 * @method CommonTCompteBancaireQuery groupByIdBanque() Group by the ID_BANQUE column
 * @method CommonTCompteBancaireQuery groupByIdentifiantBancaire() Group by the IDENTIFIANT_BANCAIRE column
 * @method CommonTCompteBancaireQuery groupByCodeVille() Group by the CODE_VILLE column
 * @method CommonTCompteBancaireQuery groupByCodeAgence() Group by the CODE_AGENCE column
 * @method CommonTCompteBancaireQuery groupByIdVille() Group by the ID_VILLE column
 * @method CommonTCompteBancaireQuery groupBySupprime() Group by the SUPPRIME column
 * @method CommonTCompteBancaireQuery groupByActif() Group by the ACTIF column
 * @method CommonTCompteBancaireQuery groupByBancarise() Group by the BANCARISE column
 *
 * @method CommonTCompteBancaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCompteBancaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCompteBancaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCompteBancaireQuery leftJoinCommonTBanque($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTBanque relation
 * @method CommonTCompteBancaireQuery rightJoinCommonTBanque($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTBanque relation
 * @method CommonTCompteBancaireQuery innerJoinCommonTBanque($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTBanque relation
 *
 * @method CommonTCompteBancaireQuery leftJoinCommonCautionDemande($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemande relation
 * @method CommonTCompteBancaireQuery rightJoinCommonCautionDemande($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemande relation
 * @method CommonTCompteBancaireQuery innerJoinCommonCautionDemande($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemande relation
 *
 * @method CommonTCompteBancaire findOne(PropelPDO $con = null) Return the first CommonTCompteBancaire matching the query
 * @method CommonTCompteBancaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTCompteBancaire matching the query, or a new CommonTCompteBancaire object populated from the query conditions when no match is found
 *
 * @method CommonTCompteBancaire findOneByIdEntreprise(int $ID_ENTREPRISE) Return the first CommonTCompteBancaire filtered by the ID_ENTREPRISE column
 * @method CommonTCompteBancaire findOneByIdInscrit(int $ID_INSCRIT) Return the first CommonTCompteBancaire filtered by the ID_INSCRIT column
 * @method CommonTCompteBancaire findOneByDenomination(string $DENOMINATION) Return the first CommonTCompteBancaire filtered by the DENOMINATION column
 * @method CommonTCompteBancaire findOneByIdBanque(int $ID_BANQUE) Return the first CommonTCompteBancaire filtered by the ID_BANQUE column
 * @method CommonTCompteBancaire findOneByIdentifiantBancaire(string $IDENTIFIANT_BANCAIRE) Return the first CommonTCompteBancaire filtered by the IDENTIFIANT_BANCAIRE column
 * @method CommonTCompteBancaire findOneByCodeVille(string $CODE_VILLE) Return the first CommonTCompteBancaire filtered by the CODE_VILLE column
 * @method CommonTCompteBancaire findOneByCodeAgence(string $CODE_AGENCE) Return the first CommonTCompteBancaire filtered by the CODE_AGENCE column
 * @method CommonTCompteBancaire findOneByIdVille(int $ID_VILLE) Return the first CommonTCompteBancaire filtered by the ID_VILLE column
 * @method CommonTCompteBancaire findOneBySupprime(string $SUPPRIME) Return the first CommonTCompteBancaire filtered by the SUPPRIME column
 * @method CommonTCompteBancaire findOneByActif(string $ACTIF) Return the first CommonTCompteBancaire filtered by the ACTIF column
 * @method CommonTCompteBancaire findOneByBancarise(string $BANCARISE) Return the first CommonTCompteBancaire filtered by the BANCARISE column
 *
 * @method array findById(int $ID) Return CommonTCompteBancaire objects filtered by the ID column
 * @method array findByIdEntreprise(int $ID_ENTREPRISE) Return CommonTCompteBancaire objects filtered by the ID_ENTREPRISE column
 * @method array findByIdInscrit(int $ID_INSCRIT) Return CommonTCompteBancaire objects filtered by the ID_INSCRIT column
 * @method array findByDenomination(string $DENOMINATION) Return CommonTCompteBancaire objects filtered by the DENOMINATION column
 * @method array findByIdBanque(int $ID_BANQUE) Return CommonTCompteBancaire objects filtered by the ID_BANQUE column
 * @method array findByIdentifiantBancaire(string $IDENTIFIANT_BANCAIRE) Return CommonTCompteBancaire objects filtered by the IDENTIFIANT_BANCAIRE column
 * @method array findByCodeVille(string $CODE_VILLE) Return CommonTCompteBancaire objects filtered by the CODE_VILLE column
 * @method array findByCodeAgence(string $CODE_AGENCE) Return CommonTCompteBancaire objects filtered by the CODE_AGENCE column
 * @method array findByIdVille(int $ID_VILLE) Return CommonTCompteBancaire objects filtered by the ID_VILLE column
 * @method array findBySupprime(string $SUPPRIME) Return CommonTCompteBancaire objects filtered by the SUPPRIME column
 * @method array findByActif(string $ACTIF) Return CommonTCompteBancaire objects filtered by the ACTIF column
 * @method array findByBancarise(string $BANCARISE) Return CommonTCompteBancaire objects filtered by the BANCARISE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCompteBancaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCompteBancaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCompteBancaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCompteBancaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCompteBancaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCompteBancaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCompteBancaireQuery) {
            return $criteria;
        }
        $query = new CommonTCompteBancaireQuery();
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
     * @return   CommonTCompteBancaire|CommonTCompteBancaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCompteBancairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCompteBancaire A model object, or null if the key is not found
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
     * @return                 CommonTCompteBancaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_ENTREPRISE`, `ID_INSCRIT`, `DENOMINATION`, `ID_BANQUE`, `IDENTIFIANT_BANCAIRE`, `CODE_VILLE`, `CODE_AGENCE`, `ID_VILLE`, `SUPPRIME`, `ACTIF`, `BANCARISE` FROM `t_compte_bancaire` WHERE `ID` = :p0';
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
            $obj = new CommonTCompteBancaire();
            $obj->hydrate($row);
            CommonTCompteBancairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTCompteBancaire|CommonTCompteBancaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCompteBancaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTCompteBancairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTCompteBancairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::ID, $id, $comparison);
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the DENOMINATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination('fooValue');   // WHERE DENOMINATION = 'fooValue'
     * $query->filterByDenomination('%fooValue%'); // WHERE DENOMINATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCompteBancairePeer::DENOMINATION, $denomination, $comparison);
    }

    /**
     * Filter the query on the ID_BANQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBanque(1234); // WHERE ID_BANQUE = 1234
     * $query->filterByIdBanque(array(12, 34)); // WHERE ID_BANQUE IN (12, 34)
     * $query->filterByIdBanque(array('min' => 12)); // WHERE ID_BANQUE >= 12
     * $query->filterByIdBanque(array('max' => 12)); // WHERE ID_BANQUE <= 12
     * </code>
     *
     * @see       filterByCommonTBanque()
     *
     * @param     mixed $idBanque The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByIdBanque($idBanque = null, $comparison = null)
    {
        if (is_array($idBanque)) {
            $useMinMax = false;
            if (isset($idBanque['min'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_BANQUE, $idBanque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBanque['max'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_BANQUE, $idBanque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::ID_BANQUE, $idBanque, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_BANCAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantBancaire('fooValue');   // WHERE IDENTIFIANT_BANCAIRE = 'fooValue'
     * $query->filterByIdentifiantBancaire('%fooValue%'); // WHERE IDENTIFIANT_BANCAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantBancaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByIdentifiantBancaire($identifiantBancaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantBancaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantBancaire)) {
                $identifiantBancaire = str_replace('*', '%', $identifiantBancaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE, $identifiantBancaire, $comparison);
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCompteBancairePeer::CODE_VILLE, $codeVille, $comparison);
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCompteBancairePeer::CODE_AGENCE, $codeAgence, $comparison);
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByIdVille($idVille = null, $comparison = null)
    {
        if (is_array($idVille)) {
            $useMinMax = false;
            if (isset($idVille['min'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_VILLE, $idVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVille['max'])) {
                $this->addUsingAlias(CommonTCompteBancairePeer::ID_VILLE, $idVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::ID_VILLE, $idVille, $comparison);
    }

    /**
     * Filter the query on the SUPPRIME column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprime('fooValue');   // WHERE SUPPRIME = 'fooValue'
     * $query->filterBySupprime('%fooValue%'); // WHERE SUPPRIME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterBySupprime($supprime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprime)) {
                $supprime = str_replace('*', '%', $supprime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::SUPPRIME, $supprime, $comparison);
    }

    /**
     * Filter the query on the ACTIF column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE ACTIF = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE ACTIF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the BANCARISE column
     *
     * Example usage:
     * <code>
     * $query->filterByBancarise('fooValue');   // WHERE BANCARISE = 'fooValue'
     * $query->filterByBancarise('%fooValue%'); // WHERE BANCARISE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancarise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function filterByBancarise($bancarise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancarise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancarise)) {
                $bancarise = str_replace('*', '%', $bancarise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCompteBancairePeer::BANCARISE, $bancarise, $comparison);
    }

    /**
     * Filter the query by a related CommonTBanque object
     *
     * @param   CommonTBanque|PropelObjectCollection $commonTBanque The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCompteBancaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTBanque($commonTBanque, $comparison = null)
    {
        if ($commonTBanque instanceof CommonTBanque) {
            return $this
                ->addUsingAlias(CommonTCompteBancairePeer::ID_BANQUE, $commonTBanque->getId(), $comparison);
        } elseif ($commonTBanque instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCompteBancairePeer::ID_BANQUE, $commonTBanque->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonTBanque() only accepts arguments of type CommonTBanque or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTBanque relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function joinCommonTBanque($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTBanque');

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
            $this->addJoinObject($join, 'CommonTBanque');
        }

        return $this;
    }

    /**
     * Use the CommonTBanque relation CommonTBanque object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTBanqueQuery A secondary query class using the current class as primary query
     */
    public function useCommonTBanqueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTBanque($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTBanque', 'CommonTBanqueQuery');
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCompteBancaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemande($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonTCompteBancairePeer::ID, $commonCautionDemande->getIdCompteBancaire(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionDemandeQuery()
                ->filterByPrimaryKeys($commonCautionDemande->getPrimaryKeys())
                ->endUse();
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
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
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
     * @param   CommonTCompteBancaire $commonTCompteBancaire Object to remove from the list of results
     *
     * @return CommonTCompteBancaireQuery The current query, for fluid interface
     */
    public function prune($commonTCompteBancaire = null)
    {
        if ($commonTCompteBancaire) {
            $this->addUsingAlias(CommonTCompteBancairePeer::ID, $commonTCompteBancaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
