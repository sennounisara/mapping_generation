<?php


/**
 * Base class that represents a query for the 'backup_Intervenant_Externe_Commission' table.
 *
 * 
 *
 * @method CommonBackupIntervenantExterneCommissionQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByIdIntervenantExterne($order = Criteria::ASC) Order by the id_intervenant_externe column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByConvocation($order = Criteria::ASC) Order by the convocation column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByConvocSend($order = Criteria::ASC) Order by the convoc_send column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByNomConvoc($order = Criteria::ASC) Order by the nom_convoc column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByContenuEnvoi($order = Criteria::ASC) Order by the contenu_envoi column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByNomFichierEnvoye($order = Criteria::ASC) Order by the nom_fichier_envoye column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByFichierEnvoye($order = Criteria::ASC) Order by the fichier_envoye column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonBackupIntervenantExterneCommissionQuery orderByTypeVoix($order = Criteria::ASC) Order by the type_voix column
 *
 * @method CommonBackupIntervenantExterneCommissionQuery groupByOrganisme() Group by the organisme column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByIdCommission() Group by the id_commission column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByIdIntervenantExterne() Group by the id_intervenant_externe column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByConvocation() Group by the convocation column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByConvocSend() Group by the convoc_send column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByNomConvoc() Group by the nom_convoc column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByContenuEnvoi() Group by the contenu_envoi column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByNomFichierEnvoye() Group by the nom_fichier_envoye column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByFichierEnvoye() Group by the fichier_envoye column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonBackupIntervenantExterneCommissionQuery groupByTypeVoix() Group by the type_voix column
 *
 * @method CommonBackupIntervenantExterneCommissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBackupIntervenantExterneCommissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBackupIntervenantExterneCommissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBackupIntervenantExterneCommission findOne(PropelPDO $con = null) Return the first CommonBackupIntervenantExterneCommission matching the query
 * @method CommonBackupIntervenantExterneCommission findOneOrCreate(PropelPDO $con = null) Return the first CommonBackupIntervenantExterneCommission matching the query, or a new CommonBackupIntervenantExterneCommission object populated from the query conditions when no match is found
 *
 * @method CommonBackupIntervenantExterneCommission findOneByOrganisme(string $organisme) Return the first CommonBackupIntervenantExterneCommission filtered by the organisme column
 * @method CommonBackupIntervenantExterneCommission findOneByIdCommission(int $id_commission) Return the first CommonBackupIntervenantExterneCommission filtered by the id_commission column
 * @method CommonBackupIntervenantExterneCommission findOneByIdIntervenantExterne(int $id_intervenant_externe) Return the first CommonBackupIntervenantExterneCommission filtered by the id_intervenant_externe column
 * @method CommonBackupIntervenantExterneCommission findOneByConvocation(resource $convocation) Return the first CommonBackupIntervenantExterneCommission filtered by the convocation column
 * @method CommonBackupIntervenantExterneCommission findOneByConvocSend(string $convoc_send) Return the first CommonBackupIntervenantExterneCommission filtered by the convoc_send column
 * @method CommonBackupIntervenantExterneCommission findOneByNomConvoc(string $nom_convoc) Return the first CommonBackupIntervenantExterneCommission filtered by the nom_convoc column
 * @method CommonBackupIntervenantExterneCommission findOneByContenuEnvoi(string $contenu_envoi) Return the first CommonBackupIntervenantExterneCommission filtered by the contenu_envoi column
 * @method CommonBackupIntervenantExterneCommission findOneByNomFichierEnvoye(string $nom_fichier_envoye) Return the first CommonBackupIntervenantExterneCommission filtered by the nom_fichier_envoye column
 * @method CommonBackupIntervenantExterneCommission findOneByFichierEnvoye(resource $fichier_envoye) Return the first CommonBackupIntervenantExterneCommission filtered by the fichier_envoye column
 * @method CommonBackupIntervenantExterneCommission findOneByDateEnvoi(string $date_envoi) Return the first CommonBackupIntervenantExterneCommission filtered by the date_envoi column
 * @method CommonBackupIntervenantExterneCommission findOneByTypeVoix(string $type_voix) Return the first CommonBackupIntervenantExterneCommission filtered by the type_voix column
 *
 * @method array findByOrganisme(string $organisme) Return CommonBackupIntervenantExterneCommission objects filtered by the organisme column
 * @method array findByIdCommission(int $id_commission) Return CommonBackupIntervenantExterneCommission objects filtered by the id_commission column
 * @method array findByIdIntervenantExterne(int $id_intervenant_externe) Return CommonBackupIntervenantExterneCommission objects filtered by the id_intervenant_externe column
 * @method array findByConvocation(resource $convocation) Return CommonBackupIntervenantExterneCommission objects filtered by the convocation column
 * @method array findByConvocSend(string $convoc_send) Return CommonBackupIntervenantExterneCommission objects filtered by the convoc_send column
 * @method array findByNomConvoc(string $nom_convoc) Return CommonBackupIntervenantExterneCommission objects filtered by the nom_convoc column
 * @method array findByContenuEnvoi(string $contenu_envoi) Return CommonBackupIntervenantExterneCommission objects filtered by the contenu_envoi column
 * @method array findByNomFichierEnvoye(string $nom_fichier_envoye) Return CommonBackupIntervenantExterneCommission objects filtered by the nom_fichier_envoye column
 * @method array findByFichierEnvoye(resource $fichier_envoye) Return CommonBackupIntervenantExterneCommission objects filtered by the fichier_envoye column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonBackupIntervenantExterneCommission objects filtered by the date_envoi column
 * @method array findByTypeVoix(string $type_voix) Return CommonBackupIntervenantExterneCommission objects filtered by the type_voix column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupIntervenantExterneCommissionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBackupIntervenantExterneCommissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBackupIntervenantExterneCommission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBackupIntervenantExterneCommissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBackupIntervenantExterneCommissionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBackupIntervenantExterneCommissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBackupIntervenantExterneCommissionQuery) {
            return $criteria;
        }
        $query = new CommonBackupIntervenantExterneCommissionQuery();
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
                         A Primary key composition: [$organisme, $id_commission, $id_intervenant_externe]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBackupIntervenantExterneCommission|CommonBackupIntervenantExterneCommission[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBackupIntervenantExterneCommissionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantExterneCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupIntervenantExterneCommission A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisme`, `id_commission`, `id_intervenant_externe`, `convocation`, `convoc_send`, `nom_convoc`, `contenu_envoi`, `nom_fichier_envoye`, `fichier_envoye`, `date_envoi`, `type_voix` FROM `backup_Intervenant_Externe_Commission` WHERE `organisme` = :p0 AND `id_commission` = :p1 AND `id_intervenant_externe` = :p2';
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
            $obj = new CommonBackupIntervenantExterneCommission();
            $obj->hydrate($row);
            CommonBackupIntervenantExterneCommissionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonBackupIntervenantExterneCommission|CommonBackupIntervenantExterneCommission[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBackupIntervenantExterneCommission[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ORGANISME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_COMMISSION, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_INTERVENANT_EXTERNE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBackupIntervenantExterneCommissionPeer::ORGANISME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBackupIntervenantExterneCommissionPeer::ID_COMMISSION, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonBackupIntervenantExterneCommissionPeer::ID_INTERVENANT_EXTERNE, $key[2], Criteria::EQUAL);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_COMMISSION, $idCommission, $comparison);
    }

    /**
     * Filter the query on the id_intervenant_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdIntervenantExterne(1234); // WHERE id_intervenant_externe = 1234
     * $query->filterByIdIntervenantExterne(array(12, 34)); // WHERE id_intervenant_externe IN (12, 34)
     * $query->filterByIdIntervenantExterne(array('min' => 12)); // WHERE id_intervenant_externe >= 12
     * $query->filterByIdIntervenantExterne(array('max' => 12)); // WHERE id_intervenant_externe <= 12
     * </code>
     *
     * @param     mixed $idIntervenantExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function filterByIdIntervenantExterne($idIntervenantExterne = null, $comparison = null)
    {
        if (is_array($idIntervenantExterne)) {
            $useMinMax = false;
            if (isset($idIntervenantExterne['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIntervenantExterne['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne, $comparison);
    }

    /**
     * Filter the query on the convocation column
     *
     * @param     mixed $convocation The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function filterByConvocation($convocation = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::CONVOCATION, $convocation, $comparison);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::CONVOC_SEND, $convocSend, $comparison);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::NOM_CONVOC, $nomConvoc, $comparison);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::CONTENU_ENVOI, $contenuEnvoi, $comparison);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::NOM_FICHIER_ENVOYE, $nomFichierEnvoye, $comparison);
    }

    /**
     * Filter the query on the fichier_envoye column
     *
     * @param     mixed $fichierEnvoye The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function filterByFichierEnvoye($fichierEnvoye = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::FICHIER_ENVOYE, $fichierEnvoye, $comparison);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (is_array($dateEnvoi)) {
            $useMinMax = false;
            if (isset($dateEnvoi['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::DATE_ENVOI, $dateEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoi['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::DATE_ENVOI, $dateEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::DATE_ENVOI, $dateEnvoi, $comparison);
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
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupIntervenantExterneCommissionPeer::TYPE_VOIX, $typeVoix, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBackupIntervenantExterneCommission $commonBackupIntervenantExterneCommission Object to remove from the list of results
     *
     * @return CommonBackupIntervenantExterneCommissionQuery The current query, for fluid interface
     */
    public function prune($commonBackupIntervenantExterneCommission = null)
    {
        if ($commonBackupIntervenantExterneCommission) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBackupIntervenantExterneCommissionPeer::ORGANISME), $commonBackupIntervenantExterneCommission->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBackupIntervenantExterneCommissionPeer::ID_COMMISSION), $commonBackupIntervenantExterneCommission->getIdCommission(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonBackupIntervenantExterneCommissionPeer::ID_INTERVENANT_EXTERNE), $commonBackupIntervenantExterneCommission->getIdIntervenantExterne(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
