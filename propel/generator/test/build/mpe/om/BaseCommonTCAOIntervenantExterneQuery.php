<?php


/**
 * Base class that represents a query for the 't_CAO_Intervenant_Externe' table.
 *
 * 
 *
 * @method CommonTCAOIntervenantExterneQuery orderByIdIntervenantExterne($order = Criteria::ASC) Order by the id_intervenant_externe column
 * @method CommonTCAOIntervenantExterneQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOIntervenantExterneQuery orderByIdRefValCivilite($order = Criteria::ASC) Order by the id_ref_val_civilite column
 * @method CommonTCAOIntervenantExterneQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonTCAOIntervenantExterneQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonTCAOIntervenantExterneQuery orderByOrganisation($order = Criteria::ASC) Order by the organisation column
 * @method CommonTCAOIntervenantExterneQuery orderByFonction($order = Criteria::ASC) Order by the fonction column
 * @method CommonTCAOIntervenantExterneQuery orderByIdRefValTypeVoixDefaut($order = Criteria::ASC) Order by the id_ref_val_type_voix_defaut column
 * @method CommonTCAOIntervenantExterneQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonTCAOIntervenantExterneQuery orderByCodePostal($order = Criteria::ASC) Order by the code_postal column
 * @method CommonTCAOIntervenantExterneQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonTCAOIntervenantExterneQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonTCAOIntervenantExterneQuery orderByIdRefValModeCommunication($order = Criteria::ASC) Order by the id_ref_val_mode_communication column
 *
 * @method CommonTCAOIntervenantExterneQuery groupByIdIntervenantExterne() Group by the id_intervenant_externe column
 * @method CommonTCAOIntervenantExterneQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOIntervenantExterneQuery groupByIdRefValCivilite() Group by the id_ref_val_civilite column
 * @method CommonTCAOIntervenantExterneQuery groupByNom() Group by the nom column
 * @method CommonTCAOIntervenantExterneQuery groupByPrenom() Group by the prenom column
 * @method CommonTCAOIntervenantExterneQuery groupByOrganisation() Group by the organisation column
 * @method CommonTCAOIntervenantExterneQuery groupByFonction() Group by the fonction column
 * @method CommonTCAOIntervenantExterneQuery groupByIdRefValTypeVoixDefaut() Group by the id_ref_val_type_voix_defaut column
 * @method CommonTCAOIntervenantExterneQuery groupByAdresse() Group by the adresse column
 * @method CommonTCAOIntervenantExterneQuery groupByCodePostal() Group by the code_postal column
 * @method CommonTCAOIntervenantExterneQuery groupByVille() Group by the ville column
 * @method CommonTCAOIntervenantExterneQuery groupByEmail() Group by the email column
 * @method CommonTCAOIntervenantExterneQuery groupByIdRefValModeCommunication() Group by the id_ref_val_mode_communication column
 *
 * @method CommonTCAOIntervenantExterneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOIntervenantExterneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOIntervenantExterneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOIntervenantExterneQuery leftJoinCommonTCAOCommissionIntervenantExterne($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
 * @method CommonTCAOIntervenantExterneQuery rightJoinCommonTCAOCommissionIntervenantExterne($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
 * @method CommonTCAOIntervenantExterneQuery innerJoinCommonTCAOCommissionIntervenantExterne($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
 *
 * @method CommonTCAOIntervenantExterneQuery leftJoinCommonTCAOSeanceIntervenantExterne($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeanceIntervenantExterne relation
 * @method CommonTCAOIntervenantExterneQuery rightJoinCommonTCAOSeanceIntervenantExterne($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeanceIntervenantExterne relation
 * @method CommonTCAOIntervenantExterneQuery innerJoinCommonTCAOSeanceIntervenantExterne($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeanceIntervenantExterne relation
 *
 * @method CommonTCAOIntervenantExterneQuery leftJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeanceInvite relation
 * @method CommonTCAOIntervenantExterneQuery rightJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeanceInvite relation
 * @method CommonTCAOIntervenantExterneQuery innerJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeanceInvite relation
 *
 * @method CommonTCAOIntervenantExterne findOne(PropelPDO $con = null) Return the first CommonTCAOIntervenantExterne matching the query
 * @method CommonTCAOIntervenantExterne findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOIntervenantExterne matching the query, or a new CommonTCAOIntervenantExterne object populated from the query conditions when no match is found
 *
 * @method CommonTCAOIntervenantExterne findOneByIdIntervenantExterne(string $id_intervenant_externe) Return the first CommonTCAOIntervenantExterne filtered by the id_intervenant_externe column
 * @method CommonTCAOIntervenantExterne findOneByOrganisme(string $organisme) Return the first CommonTCAOIntervenantExterne filtered by the organisme column
 * @method CommonTCAOIntervenantExterne findOneByIdRefValCivilite(int $id_ref_val_civilite) Return the first CommonTCAOIntervenantExterne filtered by the id_ref_val_civilite column
 * @method CommonTCAOIntervenantExterne findOneByNom(string $nom) Return the first CommonTCAOIntervenantExterne filtered by the nom column
 * @method CommonTCAOIntervenantExterne findOneByPrenom(string $prenom) Return the first CommonTCAOIntervenantExterne filtered by the prenom column
 * @method CommonTCAOIntervenantExterne findOneByOrganisation(string $organisation) Return the first CommonTCAOIntervenantExterne filtered by the organisation column
 * @method CommonTCAOIntervenantExterne findOneByFonction(string $fonction) Return the first CommonTCAOIntervenantExterne filtered by the fonction column
 * @method CommonTCAOIntervenantExterne findOneByIdRefValTypeVoixDefaut(int $id_ref_val_type_voix_defaut) Return the first CommonTCAOIntervenantExterne filtered by the id_ref_val_type_voix_defaut column
 * @method CommonTCAOIntervenantExterne findOneByAdresse(string $adresse) Return the first CommonTCAOIntervenantExterne filtered by the adresse column
 * @method CommonTCAOIntervenantExterne findOneByCodePostal(string $code_postal) Return the first CommonTCAOIntervenantExterne filtered by the code_postal column
 * @method CommonTCAOIntervenantExterne findOneByVille(string $ville) Return the first CommonTCAOIntervenantExterne filtered by the ville column
 * @method CommonTCAOIntervenantExterne findOneByEmail(string $email) Return the first CommonTCAOIntervenantExterne filtered by the email column
 * @method CommonTCAOIntervenantExterne findOneByIdRefValModeCommunication(int $id_ref_val_mode_communication) Return the first CommonTCAOIntervenantExterne filtered by the id_ref_val_mode_communication column
 *
 * @method array findByIdIntervenantExterne(string $id_intervenant_externe) Return CommonTCAOIntervenantExterne objects filtered by the id_intervenant_externe column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOIntervenantExterne objects filtered by the organisme column
 * @method array findByIdRefValCivilite(int $id_ref_val_civilite) Return CommonTCAOIntervenantExterne objects filtered by the id_ref_val_civilite column
 * @method array findByNom(string $nom) Return CommonTCAOIntervenantExterne objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonTCAOIntervenantExterne objects filtered by the prenom column
 * @method array findByOrganisation(string $organisation) Return CommonTCAOIntervenantExterne objects filtered by the organisation column
 * @method array findByFonction(string $fonction) Return CommonTCAOIntervenantExterne objects filtered by the fonction column
 * @method array findByIdRefValTypeVoixDefaut(int $id_ref_val_type_voix_defaut) Return CommonTCAOIntervenantExterne objects filtered by the id_ref_val_type_voix_defaut column
 * @method array findByAdresse(string $adresse) Return CommonTCAOIntervenantExterne objects filtered by the adresse column
 * @method array findByCodePostal(string $code_postal) Return CommonTCAOIntervenantExterne objects filtered by the code_postal column
 * @method array findByVille(string $ville) Return CommonTCAOIntervenantExterne objects filtered by the ville column
 * @method array findByEmail(string $email) Return CommonTCAOIntervenantExterne objects filtered by the email column
 * @method array findByIdRefValModeCommunication(int $id_ref_val_mode_communication) Return CommonTCAOIntervenantExterne objects filtered by the id_ref_val_mode_communication column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOIntervenantExterneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOIntervenantExterneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOIntervenantExterne', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOIntervenantExterneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOIntervenantExterneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOIntervenantExterneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOIntervenantExterneQuery) {
            return $criteria;
        }
        $query = new CommonTCAOIntervenantExterneQuery();
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
                         A Primary key composition: [$id_intervenant_externe, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOIntervenantExterne|CommonTCAOIntervenantExterne[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOIntervenantExternePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOIntervenantExterne A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_intervenant_externe`, `organisme`, `id_ref_val_civilite`, `nom`, `prenom`, `organisation`, `fonction`, `id_ref_val_type_voix_defaut`, `adresse`, `code_postal`, `ville`, `email`, `id_ref_val_mode_communication` FROM `t_CAO_Intervenant_Externe` WHERE `id_intervenant_externe` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCAOIntervenantExterne();
            $obj->hydrate($row);
            CommonTCAOIntervenantExternePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOIntervenantExterne|CommonTCAOIntervenantExterne[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOIntervenantExterne[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdIntervenantExterne($idIntervenantExterne = null, $comparison = null)
    {
        if (is_array($idIntervenantExterne)) {
            $useMinMax = false;
            if (isset($idIntervenantExterne['min'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIntervenantExterne['max'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne, $comparison);
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_ref_val_civilite column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefValCivilite(1234); // WHERE id_ref_val_civilite = 1234
     * $query->filterByIdRefValCivilite(array(12, 34)); // WHERE id_ref_val_civilite IN (12, 34)
     * $query->filterByIdRefValCivilite(array('min' => 12)); // WHERE id_ref_val_civilite >= 12
     * $query->filterByIdRefValCivilite(array('max' => 12)); // WHERE id_ref_val_civilite <= 12
     * </code>
     *
     * @param     mixed $idRefValCivilite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdRefValCivilite($idRefValCivilite = null, $comparison = null)
    {
        if (is_array($idRefValCivilite)) {
            $useMinMax = false;
            if (isset($idRefValCivilite['min'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_CIVILITE, $idRefValCivilite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValCivilite['max'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_CIVILITE, $idRefValCivilite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_CIVILITE, $idRefValCivilite, $comparison);
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::NOM, $nom, $comparison);
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the organisation column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisation('fooValue');   // WHERE organisation = 'fooValue'
     * $query->filterByOrganisation('%fooValue%'); // WHERE organisation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByOrganisation($organisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisation)) {
                $organisation = str_replace('*', '%', $organisation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ORGANISATION, $organisation, $comparison);
    }

    /**
     * Filter the query on the fonction column
     *
     * Example usage:
     * <code>
     * $query->filterByFonction('fooValue');   // WHERE fonction = 'fooValue'
     * $query->filterByFonction('%fooValue%'); // WHERE fonction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fonction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByFonction($fonction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fonction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fonction)) {
                $fonction = str_replace('*', '%', $fonction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::FONCTION, $fonction, $comparison);
    }

    /**
     * Filter the query on the id_ref_val_type_voix_defaut column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefValTypeVoixDefaut(1234); // WHERE id_ref_val_type_voix_defaut = 1234
     * $query->filterByIdRefValTypeVoixDefaut(array(12, 34)); // WHERE id_ref_val_type_voix_defaut IN (12, 34)
     * $query->filterByIdRefValTypeVoixDefaut(array('min' => 12)); // WHERE id_ref_val_type_voix_defaut >= 12
     * $query->filterByIdRefValTypeVoixDefaut(array('max' => 12)); // WHERE id_ref_val_type_voix_defaut <= 12
     * </code>
     *
     * @param     mixed $idRefValTypeVoixDefaut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdRefValTypeVoixDefaut($idRefValTypeVoixDefaut = null, $comparison = null)
    {
        if (is_array($idRefValTypeVoixDefaut)) {
            $useMinMax = false;
            if (isset($idRefValTypeVoixDefaut['min'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValTypeVoixDefaut['max'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut, $comparison);
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal('fooValue');   // WHERE code_postal = 'fooValue'
     * $query->filterByCodePostal('%fooValue%'); // WHERE code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostal)) {
                $codePostal = str_replace('*', '%', $codePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::CODE_POSTAL, $codePostal, $comparison);
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::VILLE, $ville, $comparison);
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
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the id_ref_val_mode_communication column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefValModeCommunication(1234); // WHERE id_ref_val_mode_communication = 1234
     * $query->filterByIdRefValModeCommunication(array(12, 34)); // WHERE id_ref_val_mode_communication IN (12, 34)
     * $query->filterByIdRefValModeCommunication(array('min' => 12)); // WHERE id_ref_val_mode_communication >= 12
     * $query->filterByIdRefValModeCommunication(array('max' => 12)); // WHERE id_ref_val_mode_communication <= 12
     * </code>
     *
     * @param     mixed $idRefValModeCommunication The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdRefValModeCommunication($idRefValModeCommunication = null, $comparison = null)
    {
        if (is_array($idRefValModeCommunication)) {
            $useMinMax = false;
            if (isset($idRefValModeCommunication['min'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_MODE_COMMUNICATION, $idRefValModeCommunication['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValModeCommunication['max'])) {
                $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_MODE_COMMUNICATION, $idRefValModeCommunication['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_REF_VAL_MODE_COMMUNICATION, $idRefValModeCommunication, $comparison);
    }

    /**
     * Filter the query by a related CommonTCAOCommissionIntervenantExterne object
     *
     * @param   CommonTCAOCommissionIntervenantExterne|PropelObjectCollection $commonTCAOCommissionIntervenantExterne  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommissionIntervenantExterne($commonTCAOCommissionIntervenantExterne, $comparison = null)
    {
        if ($commonTCAOCommissionIntervenantExterne instanceof CommonTCAOCommissionIntervenantExterne) {
            return $this
                ->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $commonTCAOCommissionIntervenantExterne->getIdIntervenantExterne(), $comparison);
        } elseif ($commonTCAOCommissionIntervenantExterne instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOCommissionIntervenantExterneQuery()
                ->filterByPrimaryKeys($commonTCAOCommissionIntervenantExterne->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOCommissionIntervenantExterne() only accepts arguments of type CommonTCAOCommissionIntervenantExterne or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommissionIntervenantExterne($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommissionIntervenantExterne');

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
            $this->addJoinObject($join, 'CommonTCAOCommissionIntervenantExterne');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommissionIntervenantExterne relation CommonTCAOCommissionIntervenantExterne object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionIntervenantExterneQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionIntervenantExterneQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommissionIntervenantExterne($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommissionIntervenantExterne', 'CommonTCAOCommissionIntervenantExterneQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeanceIntervenantExterne object
     *
     * @param   CommonTCAOSeanceIntervenantExterne|PropelObjectCollection $commonTCAOSeanceIntervenantExterne  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeanceIntervenantExterne($commonTCAOSeanceIntervenantExterne, $comparison = null)
    {
        if ($commonTCAOSeanceIntervenantExterne instanceof CommonTCAOSeanceIntervenantExterne) {
            return $this
                ->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $commonTCAOSeanceIntervenantExterne->getIdIntervenantExterne(), $comparison);
        } elseif ($commonTCAOSeanceIntervenantExterne instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOSeanceIntervenantExterneQuery()
                ->filterByPrimaryKeys($commonTCAOSeanceIntervenantExterne->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOSeanceIntervenantExterne() only accepts arguments of type CommonTCAOSeanceIntervenantExterne or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeanceIntervenantExterne relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeanceIntervenantExterne($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeanceIntervenantExterne');

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
            $this->addJoinObject($join, 'CommonTCAOSeanceIntervenantExterne');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeanceIntervenantExterne relation CommonTCAOSeanceIntervenantExterne object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceIntervenantExterneQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceIntervenantExterneQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOSeanceIntervenantExterne($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeanceIntervenantExterne', 'CommonTCAOSeanceIntervenantExterneQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeanceInvite object
     *
     * @param   CommonTCAOSeanceInvite|PropelObjectCollection $commonTCAOSeanceInvite  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeanceInvite($commonTCAOSeanceInvite, $comparison = null)
    {
        if ($commonTCAOSeanceInvite instanceof CommonTCAOSeanceInvite) {
            return $this
                ->addUsingAlias(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $commonTCAOSeanceInvite->getIdIntervenantExterne(), $comparison);
        } elseif ($commonTCAOSeanceInvite instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOSeanceInviteQuery()
                ->filterByPrimaryKeys($commonTCAOSeanceInvite->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOSeanceInvite() only accepts arguments of type CommonTCAOSeanceInvite or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeanceInvite relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeanceInvite($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeanceInvite');

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
            $this->addJoinObject($join, 'CommonTCAOSeanceInvite');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeanceInvite relation CommonTCAOSeanceInvite object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceInviteQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceInviteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCAOSeanceInvite($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeanceInvite', 'CommonTCAOSeanceInviteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOIntervenantExterne $commonTCAOIntervenantExterne Object to remove from the list of results
     *
     * @return CommonTCAOIntervenantExterneQuery The current query, for fluid interface
     */
    public function prune($commonTCAOIntervenantExterne = null)
    {
        if ($commonTCAOIntervenantExterne) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE), $commonTCAOIntervenantExterne->getIdIntervenantExterne(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOIntervenantExternePeer::ORGANISME), $commonTCAOIntervenantExterne->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
