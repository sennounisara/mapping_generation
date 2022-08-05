<?php


/**
 * Base class that represents a query for the 'backup_Agent_Commission' table.
 *
 * 
 *
 * @method CommonBackupAgentCommissionQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBackupAgentCommissionQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonBackupAgentCommissionQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonBackupAgentCommissionQuery orderByConvocation($order = Criteria::ASC) Order by the convocation column
 * @method CommonBackupAgentCommissionQuery orderByConvocSend($order = Criteria::ASC) Order by the convoc_send column
 * @method CommonBackupAgentCommissionQuery orderByNomConvoc($order = Criteria::ASC) Order by the nom_convoc column
 * @method CommonBackupAgentCommissionQuery orderByContenuEnvoi($order = Criteria::ASC) Order by the contenu_envoi column
 * @method CommonBackupAgentCommissionQuery orderByFichierEnvoye($order = Criteria::ASC) Order by the fichier_envoye column
 * @method CommonBackupAgentCommissionQuery orderByNomFichierEnvoye($order = Criteria::ASC) Order by the nom_fichier_envoye column
 * @method CommonBackupAgentCommissionQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonBackupAgentCommissionQuery orderByTypeVoix($order = Criteria::ASC) Order by the type_voix column
 *
 * @method CommonBackupAgentCommissionQuery groupByOrganisme() Group by the organisme column
 * @method CommonBackupAgentCommissionQuery groupByIdCommission() Group by the id_commission column
 * @method CommonBackupAgentCommissionQuery groupByIdAgent() Group by the id_agent column
 * @method CommonBackupAgentCommissionQuery groupByConvocation() Group by the convocation column
 * @method CommonBackupAgentCommissionQuery groupByConvocSend() Group by the convoc_send column
 * @method CommonBackupAgentCommissionQuery groupByNomConvoc() Group by the nom_convoc column
 * @method CommonBackupAgentCommissionQuery groupByContenuEnvoi() Group by the contenu_envoi column
 * @method CommonBackupAgentCommissionQuery groupByFichierEnvoye() Group by the fichier_envoye column
 * @method CommonBackupAgentCommissionQuery groupByNomFichierEnvoye() Group by the nom_fichier_envoye column
 * @method CommonBackupAgentCommissionQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonBackupAgentCommissionQuery groupByTypeVoix() Group by the type_voix column
 *
 * @method CommonBackupAgentCommissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBackupAgentCommissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBackupAgentCommissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBackupAgentCommission findOne(PropelPDO $con = null) Return the first CommonBackupAgentCommission matching the query
 * @method CommonBackupAgentCommission findOneOrCreate(PropelPDO $con = null) Return the first CommonBackupAgentCommission matching the query, or a new CommonBackupAgentCommission object populated from the query conditions when no match is found
 *
 * @method CommonBackupAgentCommission findOneByOrganisme(string $organisme) Return the first CommonBackupAgentCommission filtered by the organisme column
 * @method CommonBackupAgentCommission findOneByIdCommission(int $id_commission) Return the first CommonBackupAgentCommission filtered by the id_commission column
 * @method CommonBackupAgentCommission findOneByIdAgent(int $id_agent) Return the first CommonBackupAgentCommission filtered by the id_agent column
 * @method CommonBackupAgentCommission findOneByConvocation(resource $convocation) Return the first CommonBackupAgentCommission filtered by the convocation column
 * @method CommonBackupAgentCommission findOneByConvocSend(string $convoc_send) Return the first CommonBackupAgentCommission filtered by the convoc_send column
 * @method CommonBackupAgentCommission findOneByNomConvoc(string $nom_convoc) Return the first CommonBackupAgentCommission filtered by the nom_convoc column
 * @method CommonBackupAgentCommission findOneByContenuEnvoi(string $contenu_envoi) Return the first CommonBackupAgentCommission filtered by the contenu_envoi column
 * @method CommonBackupAgentCommission findOneByFichierEnvoye(resource $fichier_envoye) Return the first CommonBackupAgentCommission filtered by the fichier_envoye column
 * @method CommonBackupAgentCommission findOneByNomFichierEnvoye(string $nom_fichier_envoye) Return the first CommonBackupAgentCommission filtered by the nom_fichier_envoye column
 * @method CommonBackupAgentCommission findOneByDateEnvoi(string $date_envoi) Return the first CommonBackupAgentCommission filtered by the date_envoi column
 * @method CommonBackupAgentCommission findOneByTypeVoix(string $type_voix) Return the first CommonBackupAgentCommission filtered by the type_voix column
 *
 * @method array findByOrganisme(string $organisme) Return CommonBackupAgentCommission objects filtered by the organisme column
 * @method array findByIdCommission(int $id_commission) Return CommonBackupAgentCommission objects filtered by the id_commission column
 * @method array findByIdAgent(int $id_agent) Return CommonBackupAgentCommission objects filtered by the id_agent column
 * @method array findByConvocation(resource $convocation) Return CommonBackupAgentCommission objects filtered by the convocation column
 * @method array findByConvocSend(string $convoc_send) Return CommonBackupAgentCommission objects filtered by the convoc_send column
 * @method array findByNomConvoc(string $nom_convoc) Return CommonBackupAgentCommission objects filtered by the nom_convoc column
 * @method array findByContenuEnvoi(string $contenu_envoi) Return CommonBackupAgentCommission objects filtered by the contenu_envoi column
 * @method array findByFichierEnvoye(resource $fichier_envoye) Return CommonBackupAgentCommission objects filtered by the fichier_envoye column
 * @method array findByNomFichierEnvoye(string $nom_fichier_envoye) Return CommonBackupAgentCommission objects filtered by the nom_fichier_envoye column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonBackupAgentCommission objects filtered by the date_envoi column
 * @method array findByTypeVoix(string $type_voix) Return CommonBackupAgentCommission objects filtered by the type_voix column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBackupAgentCommissionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBackupAgentCommissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBackupAgentCommission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBackupAgentCommissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBackupAgentCommissionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBackupAgentCommissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBackupAgentCommissionQuery) {
            return $criteria;
        }
        $query = new CommonBackupAgentCommissionQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$organisme, $id_commission, $id_agent]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBackupAgentCommission|CommonBackupAgentCommission[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBackupAgentCommissionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupAgentCommission A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisme`, `id_commission`, `id_agent`, `convocation`, `convoc_send`, `nom_convoc`, `contenu_envoi`, `fichier_envoye`, `nom_fichier_envoye`, `date_envoi`, `type_voix` FROM `backup_Agent_Commission` WHERE `organisme` = :p0 AND `id_commission` = :p1 AND `id_agent` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonBackupAgentCommission();
            $obj->hydrate($row);
            CommonBackupAgentCommissionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonBackupAgentCommission|CommonBackupAgentCommission[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBackupAgentCommission[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBackupAgentCommissionPeer::ORGANISME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_COMMISSION, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_AGENT, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBackupAgentCommissionPeer::ORGANISME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBackupAgentCommissionPeer::ID_COMMISSION, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonBackupAgentCommissionPeer::ID_AGENT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommission(1234); // WHERE id_commission = 1234
     * $query->filterByIdCommission(array(12, 34)); // WHERE id_commission IN (12, 34)
     * $query->filterByIdCommission(array('min' => 12)); // WHERE id_commission >= 12
     * $query->filterByIdCommission(array('max' => 12)); // WHERE id_commission <= 12
     * </code>
     *
     * @param     mixed $idCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_COMMISSION, $idCommission, $comparison);
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
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the convocation column
     *
     * @param     mixed $convocation The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByConvocation($convocation = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::CONVOCATION, $convocation, $comparison);
    }

    /**
     * Filter the query on the convoc_send column
     *
     * Example usage:
     * <code>
     * $query->filterByConvocSend('fooValue');   // WHERE convoc_send = 'fooValue'
     * $query->filterByConvocSend('%fooValue%'); // WHERE convoc_send LIKE '%fooValue%'
     * </code>
     *
     * @param     string $convocSend The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByConvocSend($convocSend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($convocSend)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $convocSend)) {
                $convocSend = str_replace('*', '%', $convocSend);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::CONVOC_SEND, $convocSend, $comparison);
    }

    /**
     * Filter the query on the nom_convoc column
     *
     * Example usage:
     * <code>
     * $query->filterByNomConvoc('fooValue');   // WHERE nom_convoc = 'fooValue'
     * $query->filterByNomConvoc('%fooValue%'); // WHERE nom_convoc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomConvoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByNomConvoc($nomConvoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomConvoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomConvoc)) {
                $nomConvoc = str_replace('*', '%', $nomConvoc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::NOM_CONVOC, $nomConvoc, $comparison);
    }

    /**
     * Filter the query on the contenu_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByContenuEnvoi('fooValue');   // WHERE contenu_envoi = 'fooValue'
     * $query->filterByContenuEnvoi('%fooValue%'); // WHERE contenu_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contenuEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByContenuEnvoi($contenuEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contenuEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contenuEnvoi)) {
                $contenuEnvoi = str_replace('*', '%', $contenuEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::CONTENU_ENVOI, $contenuEnvoi, $comparison);
    }

    /**
     * Filter the query on the fichier_envoye column
     *
     * @param     mixed $fichierEnvoye The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByFichierEnvoye($fichierEnvoye = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::FICHIER_ENVOYE, $fichierEnvoye, $comparison);
    }

    /**
     * Filter the query on the nom_fichier_envoye column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichierEnvoye('fooValue');   // WHERE nom_fichier_envoye = 'fooValue'
     * $query->filterByNomFichierEnvoye('%fooValue%'); // WHERE nom_fichier_envoye LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichierEnvoye The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByNomFichierEnvoye($nomFichierEnvoye = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichierEnvoye)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichierEnvoye)) {
                $nomFichierEnvoye = str_replace('*', '%', $nomFichierEnvoye);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::NOM_FICHIER_ENVOYE, $nomFichierEnvoye, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('2011-03-14'); // WHERE date_envoi = '2011-03-14'
     * $query->filterByDateEnvoi('now'); // WHERE date_envoi = '2011-03-14'
     * $query->filterByDateEnvoi(array('max' => 'yesterday')); // WHERE date_envoi > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnvoi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (is_array($dateEnvoi)) {
            $useMinMax = false;
            if (isset($dateEnvoi['min'])) {
                $this->addUsingAlias(CommonBackupAgentCommissionPeer::DATE_ENVOI, $dateEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoi['max'])) {
                $this->addUsingAlias(CommonBackupAgentCommissionPeer::DATE_ENVOI, $dateEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the type_voix column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeVoix('fooValue');   // WHERE type_voix = 'fooValue'
     * $query->filterByTypeVoix('%fooValue%'); // WHERE type_voix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeVoix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function filterByTypeVoix($typeVoix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeVoix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeVoix)) {
                $typeVoix = str_replace('*', '%', $typeVoix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupAgentCommissionPeer::TYPE_VOIX, $typeVoix, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBackupAgentCommission $commonBackupAgentCommission Object to remove from the list of results
     *
     * @return CommonBackupAgentCommissionQuery The current query, for fluid interface
     */
    public function prune($commonBackupAgentCommission = null)
    {
        if ($commonBackupAgentCommission) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBackupAgentCommissionPeer::ORGANISME), $commonBackupAgentCommission->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBackupAgentCommissionPeer::ID_COMMISSION), $commonBackupAgentCommission->getIdCommission(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonBackupAgentCommissionPeer::ID_AGENT), $commonBackupAgentCommission->getIdAgent(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
