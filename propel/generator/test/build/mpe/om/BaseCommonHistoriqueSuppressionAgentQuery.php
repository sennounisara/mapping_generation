<?php


/**
 * Base class that represents a query for the 'Historique_suppression_agent' table.
 *
 * 
 *
 * @method CommonHistoriqueSuppressionAgentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonHistoriqueSuppressionAgentQuery orderByIdAgentSuppresseur($order = Criteria::ASC) Order by the id_agent_suppresseur column
 * @method CommonHistoriqueSuppressionAgentQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonHistoriqueSuppressionAgentQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonHistoriqueSuppressionAgentQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonHistoriqueSuppressionAgentQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonHistoriqueSuppressionAgentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonHistoriqueSuppressionAgentQuery orderByDateSuppression($order = Criteria::ASC) Order by the date_suppression column
 * @method CommonHistoriqueSuppressionAgentQuery orderByIdAgentSupprime($order = Criteria::ASC) Order by the id_agent_supprime column
 *
 * @method CommonHistoriqueSuppressionAgentQuery groupById() Group by the id column
 * @method CommonHistoriqueSuppressionAgentQuery groupByIdAgentSuppresseur() Group by the id_agent_suppresseur column
 * @method CommonHistoriqueSuppressionAgentQuery groupByIdService() Group by the id_service column
 * @method CommonHistoriqueSuppressionAgentQuery groupByNom() Group by the nom column
 * @method CommonHistoriqueSuppressionAgentQuery groupByPrenom() Group by the prenom column
 * @method CommonHistoriqueSuppressionAgentQuery groupByEmail() Group by the email column
 * @method CommonHistoriqueSuppressionAgentQuery groupByOrganisme() Group by the organisme column
 * @method CommonHistoriqueSuppressionAgentQuery groupByDateSuppression() Group by the date_suppression column
 * @method CommonHistoriqueSuppressionAgentQuery groupByIdAgentSupprime() Group by the id_agent_supprime column
 *
 * @method CommonHistoriqueSuppressionAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHistoriqueSuppressionAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHistoriqueSuppressionAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHistoriqueSuppressionAgent findOne(PropelPDO $con = null) Return the first CommonHistoriqueSuppressionAgent matching the query
 * @method CommonHistoriqueSuppressionAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonHistoriqueSuppressionAgent matching the query, or a new CommonHistoriqueSuppressionAgent object populated from the query conditions when no match is found
 *
 * @method CommonHistoriqueSuppressionAgent findOneByIdAgentSuppresseur(int $id_agent_suppresseur) Return the first CommonHistoriqueSuppressionAgent filtered by the id_agent_suppresseur column
 * @method CommonHistoriqueSuppressionAgent findOneByIdService(int $id_service) Return the first CommonHistoriqueSuppressionAgent filtered by the id_service column
 * @method CommonHistoriqueSuppressionAgent findOneByNom(string $nom) Return the first CommonHistoriqueSuppressionAgent filtered by the nom column
 * @method CommonHistoriqueSuppressionAgent findOneByPrenom(string $prenom) Return the first CommonHistoriqueSuppressionAgent filtered by the prenom column
 * @method CommonHistoriqueSuppressionAgent findOneByEmail(string $email) Return the first CommonHistoriqueSuppressionAgent filtered by the email column
 * @method CommonHistoriqueSuppressionAgent findOneByOrganisme(string $organisme) Return the first CommonHistoriqueSuppressionAgent filtered by the organisme column
 * @method CommonHistoriqueSuppressionAgent findOneByDateSuppression(string $date_suppression) Return the first CommonHistoriqueSuppressionAgent filtered by the date_suppression column
 * @method CommonHistoriqueSuppressionAgent findOneByIdAgentSupprime(int $id_agent_supprime) Return the first CommonHistoriqueSuppressionAgent filtered by the id_agent_supprime column
 *
 * @method array findById(int $id) Return CommonHistoriqueSuppressionAgent objects filtered by the id column
 * @method array findByIdAgentSuppresseur(int $id_agent_suppresseur) Return CommonHistoriqueSuppressionAgent objects filtered by the id_agent_suppresseur column
 * @method array findByIdService(int $id_service) Return CommonHistoriqueSuppressionAgent objects filtered by the id_service column
 * @method array findByNom(string $nom) Return CommonHistoriqueSuppressionAgent objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonHistoriqueSuppressionAgent objects filtered by the prenom column
 * @method array findByEmail(string $email) Return CommonHistoriqueSuppressionAgent objects filtered by the email column
 * @method array findByOrganisme(string $organisme) Return CommonHistoriqueSuppressionAgent objects filtered by the organisme column
 * @method array findByDateSuppression(string $date_suppression) Return CommonHistoriqueSuppressionAgent objects filtered by the date_suppression column
 * @method array findByIdAgentSupprime(int $id_agent_supprime) Return CommonHistoriqueSuppressionAgent objects filtered by the id_agent_supprime column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonHistoriqueSuppressionAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHistoriqueSuppressionAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHistoriqueSuppressionAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHistoriqueSuppressionAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHistoriqueSuppressionAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHistoriqueSuppressionAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHistoriqueSuppressionAgentQuery) {
            return $criteria;
        }
        $query = new CommonHistoriqueSuppressionAgentQuery();
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
     * @return   CommonHistoriqueSuppressionAgent|CommonHistoriqueSuppressionAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHistoriqueSuppressionAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHistoriqueSuppressionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHistoriqueSuppressionAgent A model object, or null if the key is not found
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
     * @return                 CommonHistoriqueSuppressionAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_agent_suppresseur`, `id_service`, `nom`, `prenom`, `email`, `organisme`, `date_suppression`, `id_agent_supprime` FROM `Historique_suppression_agent` WHERE `id` = :p0';
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
            $obj = new CommonHistoriqueSuppressionAgent();
            $obj->hydrate($row);
            CommonHistoriqueSuppressionAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonHistoriqueSuppressionAgent|CommonHistoriqueSuppressionAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonHistoriqueSuppressionAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID, $keys, Criteria::IN);
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
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_agent_suppresseur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentSuppresseur(1234); // WHERE id_agent_suppresseur = 1234
     * $query->filterByIdAgentSuppresseur(array(12, 34)); // WHERE id_agent_suppresseur IN (12, 34)
     * $query->filterByIdAgentSuppresseur(array('min' => 12)); // WHERE id_agent_suppresseur >= 12
     * $query->filterByIdAgentSuppresseur(array('max' => 12)); // WHERE id_agent_suppresseur <= 12
     * </code>
     *
     * @param     mixed $idAgentSuppresseur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgentSuppresseur($idAgentSuppresseur = null, $comparison = null)
    {
        if (is_array($idAgentSuppresseur)) {
            $useMinMax = false;
            if (isset($idAgentSuppresseur['min'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_AGENT_SUPPRESSEUR, $idAgentSuppresseur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentSuppresseur['max'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_AGENT_SUPPRESSEUR, $idAgentSuppresseur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_AGENT_SUPPRESSEUR, $idAgentSuppresseur, $comparison);
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
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::EMAIL, $email, $comparison);
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
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the date_suppression column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSuppression('fooValue');   // WHERE date_suppression = 'fooValue'
     * $query->filterByDateSuppression('%fooValue%'); // WHERE date_suppression LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateSuppression The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByDateSuppression($dateSuppression = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateSuppression)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateSuppression)) {
                $dateSuppression = str_replace('*', '%', $dateSuppression);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::DATE_SUPPRESSION, $dateSuppression, $comparison);
    }

    /**
     * Filter the query on the id_agent_supprime column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentSupprime(1234); // WHERE id_agent_supprime = 1234
     * $query->filterByIdAgentSupprime(array(12, 34)); // WHERE id_agent_supprime IN (12, 34)
     * $query->filterByIdAgentSupprime(array('min' => 12)); // WHERE id_agent_supprime >= 12
     * $query->filterByIdAgentSupprime(array('max' => 12)); // WHERE id_agent_supprime <= 12
     * </code>
     *
     * @param     mixed $idAgentSupprime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgentSupprime($idAgentSupprime = null, $comparison = null)
    {
        if (is_array($idAgentSupprime)) {
            $useMinMax = false;
            if (isset($idAgentSupprime['min'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_AGENT_SUPPRIME, $idAgentSupprime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentSupprime['max'])) {
                $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_AGENT_SUPPRIME, $idAgentSupprime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID_AGENT_SUPPRIME, $idAgentSupprime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHistoriqueSuppressionAgent $commonHistoriqueSuppressionAgent Object to remove from the list of results
     *
     * @return CommonHistoriqueSuppressionAgentQuery The current query, for fluid interface
     */
    public function prune($commonHistoriqueSuppressionAgent = null)
    {
        if ($commonHistoriqueSuppressionAgent) {
            $this->addUsingAlias(CommonHistoriqueSuppressionAgentPeer::ID, $commonHistoriqueSuppressionAgent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
